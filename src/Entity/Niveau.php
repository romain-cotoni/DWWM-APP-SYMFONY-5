<?php

namespace App\Entity;

use App\Repository\NiveauRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NiveauRepository::class)
 */
class Niveau
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code_niveau;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle_niveau;

    /**
     * @ORM\ManyToOne(targetEntity=Titre::class, inversedBy="niveau_id")
     */
    private $titre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeNiveau(): ?string
    {
        return $this->code_niveau;
    }

    public function setCodeNiveau(?string $code_niveau): self
    {
        $this->code_niveau = $code_niveau;

        return $this;
    }

    public function getLibelleNiveau(): ?string
    {
        return $this->libelle_niveau;
    }

    public function setLibelleNiveau(?string $libelle_niveau): self
    {
        $this->libelle_niveau = $libelle_niveau;

        return $this;
    }

    public function getTitre(): ?Titre
    {
        return $this->titre;
    }

    public function setTitre(?Titre $titre): self
    {
        $this->titre = $titre;

        return $this;
    }
}
