<?php

namespace App\Entity;

use App\Repository\AgentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgentRepository::class)
 */
class Agent
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
    private $matricule;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mot_de_passe;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_grade;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_service;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_actif;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $role;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?int
    {
        return $this->matricule;
    }

    public function setMatricule(int $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
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

    public function getMotDePasse(): ?string
    {
        return $this->mot_de_passe;
    }

    public function setMotDePasse(string $mot_de_passe): self
    {
        $this->mot_de_passe = $mot_de_passe;

        return $this;
    }

    public function getIdGrade(): ?int
    {
        return $this->id_grade;
    }

    public function setIdGrade(int $id_grade): self
    {
        $this->id_grade = $id_grade;

        return $this;
    }

    public function getIdService(): ?int
    {
        return $this->id_service;
    }

    public function setIdService(int $id_service): self
    {
        $this->id_service = $id_service;

        return $this;
    }

    public function getIsActif(): ?bool
    {
        return $this->is_actif;
    }

    public function setIsActif(bool $is_actif): self
    {
        $this->is_actif = $is_actif;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }
}
