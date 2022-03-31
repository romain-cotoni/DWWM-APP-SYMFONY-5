<?php

namespace App\Entity;

use App\Repository\ProjetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjetRepository::class)
 */
class Projet
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
    private $nom_projet;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaires;

    /**
     * @ORM\ManyToMany(targetEntity=Produit::class, inversedBy="projets")
     */
    private $produit_id;

    /**
     * @ORM\ManyToOne(targetEntity=Candidat::class, inversedBy="projets")
     */
    private $candidat_id;

    public function __construct()
    {
        $this->produit_id = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getNomProjet();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProjet(): ?string
    {
        return $this->nom_projet;
    }

    public function setNomProjet(?string $nom_projet): self
    {
        $this->nom_projet = $nom_projet;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): self
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProduitId(): Collection
    {
        return $this->produit_id;
    }

    public function addProduitId(Produit $produitId): self
    {
        if (!$this->produit_id->contains($produitId)) {
            $this->produit_id[] = $produitId;
        }

        return $this;
    }

    public function removeProduitId(Produit $produitId): self
    {
        $this->produit_id->removeElement($produitId);

        return $this;
    }

    public function getCandidatId(): ?Candidat
    {
        return $this->candidat_id;
    }

    public function setCandidatId(?Candidat $candidat_id): self
    {
        $this->candidat_id = $candidat_id;

        return $this;
    }
}
