<?php

namespace App\Entity;

use App\Repository\ProjectRolesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRolesRepository::class)
 */
class ProjectRoles
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
    private $еtitle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getеtitle(): ?string
    {
        return $this->еtitle;
    }

    public function setеtitle(string $еtitle): self
    {
        $this->еtitle = $еtitle;

        return $this;
    }
}
