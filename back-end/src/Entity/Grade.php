<?php

namespace App\Entity;

use App\Repository\GradeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GradeRepository::class)
 */
class Grade
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $libelle_grade;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleGrade(): ?string
    {
        return $this->libelle_grade;
    }

    public function setLibelleGrade(string $libelle_grade): self
    {
        $this->libelle_grade = $libelle_grade;

        return $this;
    }
}
