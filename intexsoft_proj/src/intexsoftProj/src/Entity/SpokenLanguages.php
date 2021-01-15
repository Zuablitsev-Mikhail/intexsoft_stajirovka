<?php

namespace App\Entity;

use App\Repository\SpokenLanguagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpokenLanguagesRepository::class)
 */
class SpokenLanguages
{

    public const LVL_advanced = 4;
    public const LVL_upperIntermediate = 3;
    public const LVL_intermediate = 2;
    public const LVL_elementary = 1;
    public const LVL_beginner = 0;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="SpokenLanguages")
     */
    private $user;


    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\Column(type="date")
     */
    private $dateOfCreate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateOfUpdate;

    /**
     * @ORM\ManyToOne(targetEntity=Languages::class, inversedBy="spokenLanguages")
     */
    private $language;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getLevelId(): ?int
    {
        return $this->level;
    }

    public function setLevelId(int $level_id): self
    {
        $this->level = $level_id;

        return $this;
    }

    public function getDateOfCreate(): ?\DateTimeInterface
    {
        return $this->dateOfCreate;
    }

    public function setDateOfCreate(\DateTimeInterface $dateOfCreate): self
    {
        $this->dateOfCreate = $dateOfCreate;

        return $this;
    }

    public function getDateOfUpdate(): ?\DateTimeInterface
    {
        return $this->dateOfUpdate;
    }

    public function setDateOfUpdate(\DateTimeInterface $dateOfUpdate): self
    {
        $this->dateOfUpdate = $dateOfUpdate;

        return $this;
    }

    public function getLanguage(): ?Languages
    {
        return $this->language;
    }

    public function setLanguage(?Languages $language): self
    {
        $this->language = $language;

        return $this;
    }
}
