<?php

namespace App\Entity;

use App\Repository\AvertissementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AvertissementRepository::class)
 */
class Avertissement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Agent", inversedBy="avertissements")
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
    private $id_faits;

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

    public function getIdFaits(): ?int
    {
        return $this->id_faits;
    }

    public function setIdFaits(int $id_faits): self
    {
        $this->id_faits = $id_faits;

        return $this;
    }
}
