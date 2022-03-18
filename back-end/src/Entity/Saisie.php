<?php

namespace App\Entity;

use App\Repository\SaisieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SaisieRepository::class)
 */
class Saisie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Agent", inversedBy="saisies")
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
     * @ORM\ManyToMany(targetEntity="App\Entity\SaisieType", inversedBy="saisies")
     */
    private $id_type_saisie;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img_saisie;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdTypeSaisie(): ?SaisieType
    {
        return $this->id_type_saisie;
    }

    public function setIdTypeSaisie(?SaisieType $id_type_saisie): self
    {
        $this->id_type_saisie = $id_type_saisie;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getImgSaisie(): ?string
    {
        return $this->img_saisie;
    }

    public function setImgSaisie(string $img_saisie): self
    {
        $this->img_saisie = $img_saisie;

        return $this;
    }
}
