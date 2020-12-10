<?php

namespace App\Entity;

use App\Repository\TechnicalExperienceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TechnicalExperienceRepository::class)
 */
class TechnicalExperience
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $category_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $skill_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $experienceTerm;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\Column(type="smallint")
     */
    private $lastYearUsed;

    /**
     * @ORM\Column(type="date")
     */
    private $dateOfCreate;

    /**
     * @ORM\Column(type="date")
     */
    private $dateOfUpdate;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function setCategoryId(int $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getSkillId(): ?int
    {
        return $this->skill_id;
    }

    public function setSkillId(int $skill_id): self
    {
        $this->skill_id = $skill_id;

        return $this;
    }

    public function getExperienceTerm(): ?int
    {
        return $this->experienceЕ�Term;
    }

    public function setExperienceTerm(int $experienceTerm): self
    {
        $this->experienceЕ�Term = $experienceTerm;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getLastYearUsed(): ?int
    {
        return $this->lastYearUsed;
    }

    public function setLastYearUsed(int $lastYearUsed): self
    {
        $this->lastYearUsed = $lastYearUsed;

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

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}
