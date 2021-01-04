<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $internal_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $external_title;

    /**
     * @ORM\Column(type="date")
     */
    private $period_start;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $period_end;

    /**
     * @ORM\ManyToMany(targetEntity=Skills::class, inversedBy="projects")
     */
    private $technologies;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=ProjectRoles::class, inversedBy="projects")
     */
    private $role_id;

    public function __construct()
    {
        $this->technologies = new ArrayCollection();
    }

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

    public function getInternalTitle(): ?string
    {
        return $this->internal_title;
    }

    public function setInternalTitle(string $internal_title): self
    {
        $this->internal_title = $internal_title;

        return $this;
    }

    public function getExternalTitle(): ?string
    {
        return $this->external_title;
    }

    public function setExternalTitle(string $external_title): self
    {
        $this->external_title = $external_title;

        return $this;
    }

    public function getPeriodStart(): ?\DateTimeInterface
    {
        return $this->period_start;
    }

    public function setPeriodStart(\DateTimeInterface $period_start): self
    {
        $this->period_start = $period_start;

        return $this;
    }

    public function getPeriodEnd(): ?\DateTimeInterface
    {
        return $this->period_end;
    }

    public function setPeriodEnd(?\DateTimeInterface $period_end): self
    {
        $this->period_end = $period_end;

        return $this;
    }

    /**
     * @return Collection|Skills[]
     */
    public function getTechnologies(): Collection
    {
        return $this->technologies;
    }

    public function addTechnology(Skills $technology): self
    {
        if (!$this->technologies->contains($technology)) {
            $this->technologies[] = $technology;
        }

        return $this;
    }

    public function removeTechnology(Skills $technology): self
    {
        $this->technologies->removeElement($technology);

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRoleId(): ?ProjectRoles
    {
        return $this->role_id;
    }

    public function setRoleId(?ProjectRoles $role_id): self
    {
        $this->role_id = $role_id;

        return $this;
    }
}
