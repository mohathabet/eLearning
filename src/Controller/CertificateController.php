<?php

namespace App\Controller;

use App\Entity\Certificate;
use App\Form\CertificateType;
use App\Repository\CertificateRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/certificate')]
class CertificateController extends AbstractController
{
    #[Route('/my-certificates', name: 'app_certificate_index', methods: ['GET'])]
    public function index(CertificateRepository $certificateRepository): Response
    {
        // Get the currently authenticated user
        $user = $this->getUser();

        // Ensure the user is logged in
        if (!$user) {
            throw $this->createAccessDeniedException('You must be logged in to view your certificates.');
        }

        // Fetch certificates belonging to the logged-in user
        $certificates = $certificateRepository->findBy(['user' => $user]);

        // Render the certificates index page
        return $this->render('certificate/index.html.twig', [
            'certificates' => $certificates,
            'title' => 'My Certificates',
        ]);
    }


    #[Route('/new', name: 'app_certificate_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $certificate = new Certificate();
        $form = $this->createForm(CertificateType::class, $certificate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($certificate);
            $entityManager->flush();

            return $this->redirectToRoute('app_certificate_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('certificate/new.html.twig', [
            'certificate' => $certificate,
            'form' => $form,
            'title' => 'Certificates List',
        ]);
    }

    #[Route('/{id}', name: 'app_certificate_show', methods: ['GET'])]
    public function show(Certificate $certificate): Response
    {
        $user = $this->getUser();
        return $this->render('certificate/show.html.twig', [
            'certificate' => $certificate,
            'title' => 'Certificates List',
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_certificate_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Certificate $certificate, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CertificateType::class, $certificate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_certificate_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('certificate/edit.html.twig', [
            'certificate' => $certificate,
            'form' => $form,
            'title' => 'Certificates List',
        ]);
    }

    #[Route('/{id}', name: 'app_certificate_delete', methods: ['POST'])]
    public function delete(Request $request, Certificate $certificate, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$certificate->getId(), $request->request->get('_token'))) {
            $entityManager->remove($certificate);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_certificate_index', [], Response::HTTP_SEE_OTHER);
    }
}
