<?php

namespace App\Controller\Service;

// src/Service/CertificateService.php

use App\Entity\Certificate;
use App\Repository\CertificateRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Users;
use App\Entity\Courses;

class CertificateService
{
    private $entityManager;
    private $certificateRepository;

    public function __construct(EntityManagerInterface $entityManager, CertificateRepository $certificateRepository)
    {
        $this->entityManager = $entityManager;
        $this->certificateRepository = $certificateRepository;
    }

    /**
     * Issue certificate for a user upon course completion.
     *
     * @param Users $user
     * @param Courses $course
     * @return Certificate
     */
    public function issueCertificate(User $user, Course $course): Certificate
    {
        // Create a new certificate instance
        $certificate = new Certificate($user, $course);

        // Persist the certificate to the database
        $this->entityManager->persist($certificate);
        $this->entityManager->flush();

        return $certificate;
    }
}
