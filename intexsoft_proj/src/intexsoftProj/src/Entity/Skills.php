<?php

namespace App\Entity;

use App\Repository\SkillsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SkillsRepository::class)
 */
class Skills
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="skill_id")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="id")
     */
    private $user_id;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="skill_id")
     */
    private $category_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\ManyToMany(targetEntity=Project::class, inversedBy="technologies")
     */
    private $projects;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="skills_id")
     */
    private $categories;

    public function __construct()
    {
        $this->projects = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function setCategoryId(int $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection|Project[]
     */
    public function getProjects(): Collection
    {
        return $this->projects;
    }

    public function addProject(Project $project): self
    {
        if (!$this->projects->contains($project)) {
            $this->projects[] = $project;
            $project->addTechnology($this);
        }

        return $this;
    }

    public function removeProject(Project $project): self
    {
        if ($this->projects->removeElement($project)) {
            $project->removeTechnology($this);
        }

        return $this;
    }

    public function getCategories(): ?Categories
    {
        return $this->categories;
    }

    public function setCategories(?Categories $categories): self
    {
        $this->categories = $categories;

        return $this;
    }
}
