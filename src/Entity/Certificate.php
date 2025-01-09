<?php

namespace App\Entity;

use App\Repository\CertificateRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CertificateRepository::class)]
class Certificate
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $certificateCode = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $issuedAt = null;

    #[ORM\ManyToOne(inversedBy: 'certificates')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $user = null;

    #[ORM\ManyToOne(inversedBy: 'certificates')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Courses $course = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCertificateCode(): ?string
    {
        return $this->certificateCode;
    }

    public function setCertificateCode(string $certificateCode): static
    {
        $this->certificateCode = $certificateCode;

        return $this;
    }

    public function getIssuedAt(): ?\DateTimeImmutable
    {
        return $this->issuedAt;
    }

    public function setIssuedAt(\DateTimeImmutable $issuedAt): static
    {
        $this->issuedAt = $issuedAt;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getCourse(): ?Courses
    {
        return $this->course;
    }

    public function setCourse(?Courses $course): static
    {
        $this->course = $course;

        return $this;
    }
}
