<?php

namespace App\Entity;

use App\Repository\DeclarationVolRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeclarationVolRepository::class)
 */
class DeclarationVol
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
    private $id_agent;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_suspect;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="text")
     */
    private $description_vehicule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $plaque_immatriculation;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_actif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAgent(): ?int
    {
        return $this->id_agent;
    }

    public function setIdAgent(int $id_agent): self
    {
        $this->id_agent = $id_agent;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNomSuspect(): ?string
    {
        return $this->nom_suspect;
    }

    public function setNomSuspect(string $nom_suspect): self
    {
        $this->nom_suspect = $nom_suspect;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getDescriptionVehicule(): ?string
    {
        return $this->description_vehicule;
    }

    public function setDescriptionVehicule(string $description_vehicule): self
    {
        $this->description_vehicule = $description_vehicule;

        return $this;
    }

    public function getPlaqueImmatriculation(): ?string
    {
        return $this->plaque_immatriculation;
    }

    public function setPlaqueImmatriculation(string $plaque_immatriculation): self
    {
        $this->plaque_immatriculation = $plaque_immatriculation;

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
}
