<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServiceRepository::class)
 */
class Service
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $libelle_service;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleService(): ?string
    {
        return $this->libelle_service;
    }

    public function setLibelleService(string $libelle_service): self
    {
        $this->libelle_service = $libelle_service;

        return $this;
    }
}
