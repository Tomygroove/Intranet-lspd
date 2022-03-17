<?php

namespace App\Entity;

use App\Repository\SaisieTypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SaisieTypeRepository::class)
 */
class SaisieType
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
    private $libelle_saisie_type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleSaisieType(): ?string
    {
        return $this->libelle_saisie_type;
    }

    public function setLibelleSaisieType(string $libelle_saisie_type): self
    {
        $this->libelle_saisie_type = $libelle_saisie_type;

        return $this;
    }
}
