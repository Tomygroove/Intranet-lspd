<?php

namespace App\Entity;

use App\Repository\RapportRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RapportRepository::class)
 */
class Rapport
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
    private $nom_dossier;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_faits;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien_dossier;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Agent", inversedBy="rapports")
     */
    private $id_agent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDossier(): ?string
    {
        return $this->nom_dossier;
    }

    public function setNomDossier(string $nom_dossier): self
    {
        $this->nom_dossier = $nom_dossier;

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

    public function getIdFaits(): ?int
    {
        return $this->id_faits;
    }

    public function setIdFaits(int $id_faits): self
    {
        $this->id_faits = $id_faits;

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

    public function getIdAgent(): ?Agent
    {
        return $this->id_agent;
    }

    public function setIdAgent(?Agent $id_agent): self
    {
        $this->id_agent = $id_agent;

        return $this;
    }
}
