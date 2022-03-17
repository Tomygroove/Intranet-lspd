<?php

namespace App\Entity;

use App\Repository\PlainteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlainteRepository::class)
 */
class Plainte
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
    private $nom_citoyen;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_degre;

    /**
     * @ORM\Column(type="text")
     */
    private $description_faits;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_agent;

    /**
     * @ORM\Column(type="boolean")
     */
    private $statut_plainte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCitoyen(): ?string
    {
        return $this->nom_citoyen;
    }

    public function setNomCitoyen(string $nom_citoyen): self
    {
        $this->nom_citoyen = $nom_citoyen;

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

    public function getIdDegre(): ?int
    {
        return $this->id_degre;
    }

    public function setIdDegre(int $id_degre): self
    {
        $this->id_degre = $id_degre;

        return $this;
    }

    public function getDescriptionFaits(): ?string
    {
        return $this->description_faits;
    }

    public function setDescriptionFaits(string $description_faits): self
    {
        $this->description_faits = $description_faits;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
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

    public function getStatutPlainte(): ?bool
    {
        return $this->statut_plainte;
    }

    public function setStatutPlainte(bool $statut_plainte): self
    {
        $this->statut_plainte = $statut_plainte;

        return $this;
    }
}
