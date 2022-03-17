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
    private $type_saisie;

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

    public function getTypeSaisie(): ?int
    {
        return $this->type_saisie;
    }

    public function setTypeSaisie(int $type_saisie): self
    {
        $this->type_saisie = $type_saisie;

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
