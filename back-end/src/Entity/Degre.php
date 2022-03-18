<?php

namespace App\Entity;

use App\Repository\DegreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DegreRepository::class)
 */
class Degre
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
    private $libelle_degre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AvisRecherche", mappedBy="id_degre")
     */
    private $avis_recherches;
    
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Mandat", mappedBy="id_degre")
     */
    private $mandats;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Plainte", mappedBy="id_degre")
     */
    private $plaintes;

    public function __construct()
    {
        $this->avis_recherches = new ArrayCollection();
        $this->mandats = new ArrayCollection();
        $this->plaintes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleDegre(): ?string
    {
        return $this->libelle_degre;
    }

    public function setLibelleDegre(string $libelle_degre): self
    {
        $this->libelle_degre = $libelle_degre;

        return $this;
    }

    /**
     * @return Collection|AvisRecherche[]
     */
    public function getAvisRecherches(): Collection
    {
        return $this->avis_recherches;
    }
    
    /**
     * @return Collection|Mandat[]
     */
    public function getMandats(): Collection
    {
        return $this->mandats;
    }
    
    /**
     * @return Collection|Plainte[]
     */
    public function getPlaintes(): Collection
    {
        return $this->plaintes;
    }
}
