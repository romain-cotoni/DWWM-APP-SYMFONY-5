<?php

namespace App\Entity;

use App\Repository\HabilitationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HabilitationRepository::class)
 */
class Habilitation
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
    private $titre_habilitation;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_debut_habilitation;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_fin_habilitation;

    /**
     * @ORM\ManyToMany(targetEntity=Utilisateur::class, mappedBy="habilitation_id")
     */
    private $utilisateurs;

    /**
     * @ORM\ManyToOne(targetEntity=Titre::class, inversedBy="habilitations")
     */
    private $titre_id;

    /**
     * @ORM\ManyToMany(targetEntity=Titre::class, mappedBy="habilitations_id")
     */
    private $titres;

    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
        $this->titres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreHabilitation(): ?string
    {
        return $this->titre_habilitation;
    }

    public function setTitreHabilitation(?string $titre_habilitation): self
    {
        $this->titre_habilitation = $titre_habilitation;

        return $this;
    }

    public function getDateDebutHabilitation(): ?\DateTimeInterface
    {
        return $this->date_debut_habilitation;
    }

    public function setDateDebutHabilitation(?\DateTimeInterface $date_debut_habilitation): self
    {
        $this->date_debut_habilitation = $date_debut_habilitation;

        return $this;
    }

    public function getDateFinHabilitation(): ?\DateTimeInterface
    {
        return $this->date_fin_habilitation;
    }

    public function setDateFinHabilitation(?\DateTimeInterface $date_fin_habilitation): self
    {
        $this->date_fin_habilitation = $date_fin_habilitation;

        return $this;
    }

    /**
     * @return Collection|Utilisateur[]
     */
    public function getUtilisateurs(): Collection
    {
        return $this->utilisateurs;
    }

    public function addUtilisateur(Utilisateur $utilisateur): self
    {
        if (!$this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs[] = $utilisateur;
            $utilisateur->addHabilitationId($this);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): self
    {
        if ($this->utilisateurs->removeElement($utilisateur)) {
            $utilisateur->removeHabilitationId($this);
        }

        return $this;
    }

    public function getTitreId(): ?Titre
    {
        return $this->titre_id;
    }

    public function setTitreId(?Titre $titre_id): self
    {
        $this->titre_id = $titre_id;

        return $this;
    }

    /**
     * @return Collection|Titre[]
     */
    public function getTitres(): Collection
    {
        return $this->titres;
    }

    public function addTitre(Titre $titre): self
    {
        if (!$this->titres->contains($titre)) {
            $this->titres[] = $titre;
            $titre->addHabilitationsId($this);
        }

        return $this;
    }

    public function removeTitre(Titre $titre): self
    {
        if ($this->titres->removeElement($titre)) {
            $titre->removeHabilitationsId($this);
        }

        return $this;
    }
}
