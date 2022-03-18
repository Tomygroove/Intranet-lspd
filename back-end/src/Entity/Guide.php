<?php

namespace App\Entity;

use App\Repository\GuideRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GuideRepository::class)
 */
class Guide
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
    private $droit_miranda;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code_radio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reglement_interne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tenues_agents;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDroitMiranda(): ?string
    {
        return $this->droit_miranda;
    }

    public function setDroitMiranda(string $droit_miranda): self
    {
        $this->droit_miranda = $droit_miranda;

        return $this;
    }

    public function getCodeRadio(): ?string
    {
        return $this->code_radio;
    }

    public function setCodeRadio(string $code_radio): self
    {
        $this->code_radio = $code_radio;

        return $this;
    }

    public function getReglementInterne(): ?string
    {
        return $this->reglement_interne;
    }

    public function setReglementInterne(string $reglement_interne): self
    {
        $this->reglement_interne = $reglement_interne;

        return $this;
    }

    public function getTenuesAgents(): ?string
    {
        return $this->tenues_agents;
    }

    public function setTenuesAgents(string $tenues_agents): self
    {
        $this->tenues_agents = $tenues_agents;

        return $this;
    }
}
