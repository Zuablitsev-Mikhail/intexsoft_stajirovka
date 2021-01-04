<?php

namespace App\Entity;

use App\Repository\SpokenLanguagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpokenLanguagesRepository::class)
 */
class SpokenLanguages
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="id")
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity=Languages::class)
     */
    private $language_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $level_id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateOfCreate;

    /**
     * @ORM\Column(type="date")
     */
    private $dateOfUpdate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user): self
    {
        $this->user_id = $user;

        return $this;
    }

    public function getLanguageId(): ?int
    {
        return $this->language_id;
    }

    public function setLanguageId(int $language_id): self
    {
        $this->language_id = $language_id;

        return $this;
    }

    public function getLevelId(): ?int
    {
        return $this->level_id;
    }

    public function setLevelId(int $level_id): self
    {
        $this->level_id = $level_id;

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
}
