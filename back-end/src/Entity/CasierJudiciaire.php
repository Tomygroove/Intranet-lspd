<?php

namespace App\Entity;

use App\Repository\CasierJudiciaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CasierJudiciaireRepository::class)
 */
class CasierJudiciaire
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
    private $nom_suspect;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $temps_detention;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fin_detention;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_faits;

    /**
     * @ORM\Column(type="integer")
     */
    private $amende;

    /**
     * @ORM\Column(type="text")
     */
    private $bien_saisi;

    /**
     * @ORM\Column(type="text")
     */
    private $bien_rendre;

    /**
     * @ORM\Column(type="boolean")
     */
    private $avocat;

    /**
     * @ORM\Column(type="boolean")
     */
    private $comparution;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img_suspect;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Agent", inversedBy="casier_judiciaires")
     */
    private $id_agent;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTempsDetention(): ?string
    {
        return $this->temps_detention;
    }

    public function setTempsDetention(string $temps_detention): self
    {
        $this->temps_detention = $temps_detention;

        return $this;
    }

    public function getFinDetention(): ?string
    {
        return $this->fin_detention;
    }

    public function setFinDetention(string $fin_detention): self
    {
        $this->fin_detention = $fin_detention;

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

    public function getAmende(): ?int
    {
        return $this->amende;
    }

    public function setAmende(int $amende): self
    {
        $this->amende = $amende;

        return $this;
    }

    public function getBienSaisi(): ?string
    {
        return $this->bien_saisi;
    }

    public function setBienSaisi(string $bien_saisi): self
    {
        $this->bien_saisi = $bien_saisi;

        return $this;
    }

    public function getBienRendre(): ?string
    {
        return $this->bien_rendre;
    }

    public function setBienRendre(string $bien_rendre): self
    {
        $this->bien_rendre = $bien_rendre;

        return $this;
    }

    public function getAvocat(): ?bool
    {
        return $this->avocat;
    }

    public function setAvocat(bool $avocat): self
    {
        $this->avocat = $avocat;

        return $this;
    }

    public function getComparution(): ?bool
    {
        return $this->comparution;
    }

    public function setComparution(bool $comparution): self
    {
        $this->comparution = $comparution;

        return $this;
    }

    public function getImgSuspect(): ?string
    {
        return $this->img_suspect;
    }

    public function setImgSuspect(string $img_suspect): self
    {
        $this->img_suspect = $img_suspect;

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
