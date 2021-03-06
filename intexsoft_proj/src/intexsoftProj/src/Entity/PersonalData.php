<?php

namespace App\Entity;

use App\Repository\PersonalDataRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Type;

/**
 * @ORM\Entity(repositoryClass=PersonalDataRepository::class)
 */
class PersonalData
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateOfBirthday;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $MaritalStatus;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Gender;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $about;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateOfBirthday(): ?\DateTimeInterface
    {
        return $this->dateOfBirthday;
    }

    public function setDateOfBirthday(\DateTimeInterface $dateOfBirthday): self
    {
        $this->dateOfBirthday = $dateOfBirthday;

        return $this;
    }

    public function getMaritalStatus(): ?string
    {
        return $this->MaritalStatus;
    }

    public function setMaritalStatus(string $MaritalStatus): self
    {
        $this->MaritalStatus = $MaritalStatus;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->Gender;
    }

    public function setGender(string $Gender): self
    {
        $this->Gender = $Gender;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAbout(): ?string
    {
        return $this->about;
    }

    public function setAbout(string $about): self
    {
        $this->about = $about;

        return $this;
    }

    public function getUserId(): ?user
    {
        return $this->user;
    }

    public function setUserId(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
    public function getUserEmail(): ?string
    {
        return $this->user->getEmail();
    }
    public function getUserRoles(): ?string
    {
        return $this->user->getRoles()[0];
    }
}
