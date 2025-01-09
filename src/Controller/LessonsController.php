<?php

namespace App\Controller;
use App\Repository\CertificateRepository;
use App\Entity\Certificate;
use App\Entity\Lessons;
use App\Entity\Progress;
use App\Form\LessonsType;
use App\Repository\EnrollmentsRepository;
use App\Repository\LessonsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\SluggerInterface;


#[Route('/lessons')]
class LessonsController extends AbstractController
{
    #[Route('/', name: 'app_lessons_index', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function index(LessonsRepository $lessonsRepository): Response
    {
        return $this->render('lessons/index.html.twig', [
            'lessons' => $lessonsRepository->findAll(),
            'title' => 'List of lessons'
        ]);
    }

    #[Route('/new', name: 'app_lessons_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_INSTRUCTOR')]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        // Create a new lesson instance
        $lesson = new Lessons();

        // Create the form with the LessonsType
        $form = $this->createForm(LessonsType::class, $lesson);

        // Handle the form submission
        $form->handleRequest($request);

        // Check if the form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {
            // Handle PDF file upload (if a file is uploaded)
            $pdfFile = $form->get('content')->getData();  // Ensure the form field name is 'content'

            if ($pdfFile) {
                // Generate a unique name for the uploaded PDF file
                $originalFilename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pdfFile->guessExtension();

                // Try to move the file to the directory specified in services.yaml
                try {
                    $pdfFile->move(
                        $this->getParameter('pdf_directory'),  // Directory path defined in services.yaml
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle error if file upload fails
                    $this->addFlash('error', 'Error uploading PDF.');
                    return $this->redirectToRoute('app_lessons_new');
                }

                // Store the new PDF filename in the lesson entity (in content field or pdfFilename, as needed)
                $lesson->setContent($newFilename);  // Use the appropriate setter for content (if storing filename in content)
            }

            // Persist the lesson entity with the uploaded PDF filename
            $entityManager->persist($lesson);
            $entityManager->flush();

            // Redirect to the lesson index page after successful creation
            return $this->redirectToRoute('app_lessons_index', [], Response::HTTP_SEE_OTHER);
        }

        // Render the form if not submitted or invalid
        return $this->render('lessons/new.html.twig', [
            'lesson' => $lesson,
            'form' => $form->createView(),
            'title' => 'Create a lesson'
        ]);
    }


    #[Route('/{id}', name: 'app_lessons_show', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function show(Lessons $lesson): Response
    {
        // Get the PDF file path from the content field
        $pdfFile = $lesson->getContent();

        return $this->render('lessons/show.html.twig', [
            'lesson' => $lesson,
            'title' => 'Information about lesson <br>"' . $lesson->getTitle() . '"',
            'pdfFile' => $pdfFile // Passing the file path to the template
        ]);
    }


    #[Route('/{id}/edit', name: 'app_lessons_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_INSTRUCTOR')]
    public function edit(Request $request, Lessons $lesson, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(LessonsType::class, $lesson);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle the PDF file upload (if a file is uploaded)
            $pdfFile = $form->get('content')->getData(); // Adjust to your field name

            if ($pdfFile) {
                // Generate a unique name for the uploaded PDF file
                $originalFilename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pdfFile->guessExtension();

                // Try to move the file to the directory specified in services.yaml
                try {
                    $pdfFile->move(
                        $this->getParameter('pdf_directory'),  // Directory path defined in services.yaml
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle error if file upload fails
                    $this->addFlash('error', 'Error uploading PDF.');
                    return $this->redirectToRoute('app_lessons_edit', ['id' => $lesson->getId()]);
                }

                // Store the new PDF filename in the lesson entity
                $lesson->setContent($newFilename);
            }

            // Persist the updated lesson entity with the new PDF filename (if uploaded)
            $entityManager->flush();

            // Redirect to the lesson index page after successful update
            return $this->redirectToRoute('app_lessons_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('lessons/edit.html.twig', [
            'lesson' => $lesson,
            'form' => $form->createView(),
            'title' => 'Edit lesson <br>' . $lesson->getId()
        ]);
    }

    #[Route('/{id}', name: 'app_lessons_delete', methods: ['POST'])]
    #[IsGranted('ROLE_INSTRUCTOR')]
    public function delete(Request $request, Lessons $lesson, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lesson->getId(), $request->request->get('_token'))) {
            $entityManager->remove($lesson);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_lessons_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/complete', name: 'app_lessons_complete', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function complete(
        Lessons $lesson,
        EnrollmentsRepository $enrollmentsRepository,
        LessonsRepository $lessonsRepository,
        EntityManagerInterface $entityManager,
        CertificateRepository $certificateRepository // Add certificate repository
    ): Response {
        // Find the enrollment of the current user
        $enrollment = $enrollmentsRepository->findOneBy([
            'course' => $lesson->getCourse(),
            'user' => $this->getUser(),
        ]);

        if (!$enrollment) {
            $this->addFlash('error', 'You are not enrolled in this course.');
            return $this->redirectToRoute('app_courses_show', ['id' => $lesson->getCourse()->getId()]);
        }

        // Retrieve or create the progress entry for the user
        $progress = $entityManager->getRepository(Progress::class)->findOneBy([
            'lessons' => $lesson,
            'enrollment' => $enrollment,
        ]);

        if (!$progress) {
            // Create a new progress record if not already present
            $progress = new Progress();
            $progress->setLessons($lesson);
            $progress->setEnrollment($enrollment);
            $progress->setStatus(0);
            $progress->setLastAccessed(new \DateTimeImmutable());
        }

        // Update the progress to 'completed' status (1)
        $progress->setStatus(1);
        $progress->setLastAccessed(new \DateTimeImmutable());
        $entityManager->persist($progress);
        $entityManager->flush();

        // Now check if all lessons in the course have been completed
        $course = $lesson->getCourse();
        $allLessons = $lessonsRepository->findByCourse($course);
        $totalLessons = count($allLessons);
        $completedLessonsCount = $lessonsRepository->countCompletedLessons($enrollment); // Implement this method to count completed lessons

        if ($totalLessons === $completedLessonsCount) {
            // If all lessons are completed, generate a new certificate
            $certificate = new Certificate();
            $certificateCode = 'CERT-' . strtoupper(bin2hex(random_bytes(5))); // Generate unique certificate code
            $certificate->setCertificateCode($certificateCode);
            $certificate->setIssuedAt(new \DateTimeImmutable()); // Set current date as issued date
            $certificate->setUser($this->getUser());
            $certificate->setCourse($course);

            // Persist the certificate
            $entityManager->persist($certificate);
            $entityManager->flush();

            // Add flash message indicating course completion and certificate generation
            $this->addFlash('success', 'Congratulations, you have completed the course!');
            $this->addFlash('success', 'Your certificate has been generated: ' . $certificateCode);
        }

        // Redirect back to the course page
        return $this->redirectToRoute('app_courses_show', ['id' => $course->getId()]);
    }


}
