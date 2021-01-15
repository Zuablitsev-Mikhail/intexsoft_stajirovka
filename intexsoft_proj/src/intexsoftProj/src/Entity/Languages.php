<?php

namespace App\Entity;

use App\Repository\LanguagesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LanguagesRepository::class)
 */
class Languages
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity=SpokenLanguages::class)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\OneToMany(targetEntity=SpokenLanguages::class, mappedBy="language")
     */
    private $spokenLanguages;

    public function __construct()
    {
        $this->spokenLanguages = new ArrayCollection();
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
     * @return Collection|SpokenLanguages[]
     */
    public function getSpokenLanguages(): Collection
    {
        return $this->spokenLanguages;
    }

    public function addSpokenLanguage(SpokenLanguages $spokenLanguage): self
    {
        if (!$this->spokenLanguages->contains($spokenLanguage)) {
            $this->spokenLanguages[] = $spokenLanguage;
            $spokenLanguage->setLanguage($this);
        }

        return $this;
    }

    public function removeSpokenLanguage(SpokenLanguages $spokenLanguage): self
    {
        if ($this->spokenLanguages->removeElement($spokenLanguage)) {
            // set the owning side to null (unless already changed)
            if ($spokenLanguage->getLanguage() === $this) {
                $spokenLanguage->setLanguage(null);
            }
        }

        return $this;
    }
}
