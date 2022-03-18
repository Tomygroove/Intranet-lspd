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
     * @ORM\ManyToOne(targetEntity="App\Entity\Grade", inversedBy="agents")
     */
    private $id_grade;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Service", inversedBy="agents")
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
    
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\AvisRecherche", mappedBy="id_agent")
     */
    private $avis_recherches;
    
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Avertissement", mappedBy="id_agent")
     */
    private $avertissements;
    
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CasierJudiciaire", mappedBy="id_agent")
     */
    private $casier_judiciaires;
    
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\DeclarationVol", mappedBy="id_agent")
     */
    private $declaration_vols;
    
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Rapport", mappedBy="id_agent")
     */
    private $rapports;
    
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Plainte", mappedBy="id_agent")
     */
    private $plaintes;
    
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Saisie", mappedBy="id_agent")
     */
    private $saisies;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Information", mappedBy="id_agent")
     */
    private $informations;

    public function __construct()
    {
        $this->avis_recherches = new ArrayCollection();
        $this->avertissements = new ArrayCollection();
        $this->casier_judiciaires = new ArrayCollection();
        $this->declaration_vols = new ArrayCollection();
        $this->mandats = new ArrayCollection();
        $this->plaintes = new ArrayCollection();
        $this->saisies = new ArrayCollection();
        $this->informations = new ArrayCollection();
    }

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

    public function getIdGrade(): ?Grade
    {
        return $this->id_grade;
    }

    public function setIdGrade(?Grade $id_grade): self
    {
        $this->id_grade = $id_grade;

        return $this;
    }

    public function getIdService(): ?Service
    {
        return $this->id_service;
    }

    public function setIdService(?Service $id_service): self
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

    /**
     * @return Collection|AvisRecherche[]
     */
    public function getAvisRecherches(): Collection
    {
        return $this->avis_recherches;
    }
    
    /**
     * @return Collection|Avertissement[]
     */
    public function getAvertissements(): Collection
    {
        return $this->avertissements;
    }
    
    /**
     * @return Collection|CasierJuciciaire[]
     */
    public function getCasisierJudiciaires(): Collection
    {
        return $this->casier_judiciaires;
    }
    
    /**
     * @return Collection|DeclarationVol[]
     */
    public function getDeclarationVols(): Collection
    {
        return $this->declaration_vols;
    }
    
    /**
     * @return Collection|Rapport[]
     */
    public function getRapports(): Collection
    {
        return $this->rapports;
    }
    
    /**
     * @return Collection|Plainte[]
     */
    public function getPlaintes(): Collection
    {
        return $this->plaintes;
    }
    
    /**
     * @return Collection|Saisie[]
     */
    public function getSaisies(): Collection
    {
        return $this->saisies;
    }
    
    /**
     * @return Collection|Information[]
     */
    public function getInformations(): Collection
    {
        return $this->informations;
    }
}
