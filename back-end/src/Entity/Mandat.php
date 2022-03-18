<?php

namespace App\Entity;

use App\Repository\MandatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MandatRepository::class)
 */
class Mandat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Degre", inversedBy="mandats")
     */
    private $id_degre;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_suspect;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_faits;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description_mandat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien_dossier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDegre(): ?Degre
    {
        return $this->id_degre;
    }

    public function setIdDegre(?Degre $id_degre): self
    {
        $this->id_degre = $id_degre;

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

    public function getIdFaits(): ?string
    {
        return $this->id_faits;
    }

    public function setIdFaits(string $id_faits): self
    {
        $this->id_faits = $id_faits;

        return $this;
    }

    public function getDescriptionMandat(): ?string
    {
        return $this->description_mandat;
    }

    public function setDescriptionMandat(?string $description_mandat): self
    {
        $this->description_mandat = $description_mandat;

        return $this;
    }

    public function getLienDossier(): ?string
    {
        return $this->lien_dossier;
    }

    public function setLienDossier(string $lien_dossier): self
    {
        $this->lien_dossier = $lien_dossier;

        return $this;
    }
}
