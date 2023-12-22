<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $user_name = null;

    #[ORM\Column(length: 88)]
    private ?string $user_password = null;

    #[ORM\Column(length: 23)]
    private ?string $user_salt = null;

    #[ORM\Column(length: 50)]
    private ?string $user_role = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->user_name;
    }

    public function setUserName(string $user_name): static
    {
        $this->user_name = $user_name;

        return $this;
    }

    public function getUserPassword(): ?string
    {
        return $this->user_password;
    }

    public function setUserPassword(string $user_password): static
    {
        $this->user_password = $user_password;

        return $this;
    }

    public function getUserSalt(): ?string
    {
        return $this->user_salt;
    }

    public function setUserSalt(string $user_salt): static
    {
        $this->user_salt = $user_salt;

        return $this;
    }

    public function getUserRole(): ?string
    {
        return $this->user_role;
    }

    public function setUserRole(string $user_role): static
    {
        $this->user_role = $user_role;

        return $this;
    }
}
