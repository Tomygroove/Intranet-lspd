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
}
