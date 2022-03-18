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
     * @ORM\Column(type="string", length=255)
     */
    private $liste_agents;

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

    public function getListeAgents(): ?string
    {
        return $this->liste_agents;
    }

    public function setListeAgents(string $liste_agents): self
    {
        $this->liste_agents = $liste_agents;

        return $this;
    }
}
