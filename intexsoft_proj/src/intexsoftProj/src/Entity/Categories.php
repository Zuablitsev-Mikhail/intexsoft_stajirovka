<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesRepository::class)
 */
class Categories
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\OneToMany(targetEntity=Skills::class, mappedBy="categories")
     */
    private $skills_id;

    public function __construct()
    {
        $this->skills_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
     * @return Collection|Skills[]
     */
    public function getSkillsId(): Collection
    {
        return $this->skills_id;
    }

    public function addSkillsId(Skills $skillsId): self
    {
        if (!$this->skills_id->contains($skillsId)) {
            $this->skills_id[] = $skillsId;
            $skillsId->setCategories($this);
        }

        return $this;
    }

    public function removeSkillsId(Skills $skillsId): self
    {
        if ($this->skills_id->removeElement($skillsId)) {
            // set the owning side to null (unless already changed)
            if ($skillsId->getCategories() === $this) {
                $skillsId->setCategories(null);
            }
        }

        return $this;
    }
}
