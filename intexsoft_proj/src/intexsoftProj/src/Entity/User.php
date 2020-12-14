<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    public const ROLE_USER = 0;
    public const ROLE_SELLER = 1;
    public const ROLE_HR = 2;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="src\Entity\PersonalData")
     * @ORM\OneToMany(targetEntity=SpokenLanguages::class, mappedBy="user_id")
     * @ORM\OneToMany(targetEntity=CareerSummary::class, mappedBy="user_id")
     * @ORM\OneToMany(targetEntity=TechnicalExperience::class, mappedBy="user_id")
     * @ORM\OneToMany(targetEntity=Skills::class, mappedBy="user_id")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateOfCreate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateOfUpdate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        if($this->roles[0] == self::ROLE_USER) $roles[] = 'ROLE_USER';
        if($this->roles[0] == self::ROLE_SELLER) $roles[] = 'ROLE_SELLER';
        if($this->roles[0] == self::ROLE_HR) $roles[] = 'ROLE_HR';
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getDateOfCreate(): ?\DateTimeInterface
    {
        return $this->DateOfCreate;
    }

    public function setDateOfCreate(?\DateTimeInterface $DateOfCreate): self
    {
        $this->DateOfCreate = $DateOfCreate;

        return $this;
    }

    public function getDateOfUpdate(): ?\DateTimeInterface
    {
        return $this->DateOfUpdate;
    }

    public function setDateOfUpdate(?\DateTimeInterface $DateOfUpdate): self
    {
        $this->DateOfUpdate = $DateOfUpdate;
        return $this;
    }
}
