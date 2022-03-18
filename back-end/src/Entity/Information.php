<?php

namespace App\Entity;

use App\Repository\InformationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InformationRepository::class)
 */
class Information
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
    private $referent_unite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $referent_formation;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Agent", inversedBy="informations")
     */
    private $id_agent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferentUnite(): ?string
    {
        return $this->referent_unite;
    }

    public function setReferentUnite(string $referent_unite): self
    {
        $this->referent_unite = $referent_unite;

        return $this;
    }

    public function getReferentFormation(): ?string
    {
        return $this->referent_formation;
    }

    public function setReferentFormation(string $referent_formation): self
    {
        $this->referent_formation = $referent_formation;

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
