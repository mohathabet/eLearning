<?php

namespace App\Entity;

use App\Repository\ProfileRepository;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfileRepository::class)]
class Profile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'profile', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $user = null;

    #[ORM\Column(nullable: true)]
    private ?string $image = null;

    #[ORM\Column(nullable: true)]
    private ?DateTime $dateOfBirth = null; // Changed to DateTime

    #[ORM\Column(nullable: true)]
    private ?string $country = null;

    #[ORM\Column(nullable: true)]
    private ?string $address = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsers(): ?Users
    {
        return $this->user;
    }

    public function setUsers(?Users $users): void
    {
        $this->user = $users;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    public function getDateOfBirth(): ?DateTime // Changed return type to DateTime
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(?DateTime $dateOfBirth): void // Changed parameter type to DateTime
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(Users $user): static
    {
        $this->user = $user;

        return $this;
    }
}
