<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur
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
    private $insee;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_utilisateur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom_utilisateur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse_utilisateur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code_postal_utilisateur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville_utilisateur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel_mob_utilisateur;

    /**
     * @ORM\ManyToMany(targetEntity=Habilitation::class, inversedBy="utilisateurs")
     */
    private $habilitation_id;

    /**
     * @ORM\ManyToOne(targetEntity=Jury::class, inversedBy="utilisateurs")
     */
    private $jury_id;

    public function __construct()
    {
        $this->habilitation_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInsee(): ?string
    {
        return $this->insee;
    }

    public function setInsee(?string $insee): self
    {
        $this->insee = $insee;

        return $this;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nom_utilisateur;
    }

    public function setNomUtilisateur(?string $nom_utilisateur): self
    {
        $this->nom_utilisateur = $nom_utilisateur;

        return $this;
    }

    public function getPrenomUtilisateur(): ?string
    {
        return $this->prenom_utilisateur;
    }

    public function setPrenomUtilisateur(?string $prenom_utilisateur): self
    {
        $this->prenom_utilisateur = $prenom_utilisateur;

        return $this;
    }

    public function getAdresseUtilisateur(): ?string
    {
        return $this->adresse_utilisateur;
    }

    public function setAdresseUtilisateur(?string $adresse_utilisateur): self
    {
        $this->adresse_utilisateur = $adresse_utilisateur;

        return $this;
    }

    public function getCodePostalUtilisateur(): ?string
    {
        return $this->code_postal_utilisateur;
    }

    public function setCodePostalUtilisateur(?string $code_postal_utilisateur): self
    {
        $this->code_postal_utilisateur = $code_postal_utilisateur;

        return $this;
    }

    public function getVilleUtilisateur(): ?string
    {
        return $this->ville_utilisateur;
    }

    public function setVilleUtilisateur(?string $ville_utilisateur): self
    {
        $this->ville_utilisateur = $ville_utilisateur;

        return $this;
    }

    public function getTelMobUtilisateur(): ?string
    {
        return $this->tel_mob_utilisateur;
    }

    public function setTelMobUtilisateur(?string $tel_mob_utilisateur): self
    {
        $this->tel_mob_utilisateur = $tel_mob_utilisateur;

        return $this;
    }

    /**
     * @return Collection|Habilitation[]
     */
    public function getHabilitationId(): Collection
    {
        return $this->habilitation_id;
    }

    public function addHabilitationId(Habilitation $habilitationId): self
    {
        if (!$this->habilitation_id->contains($habilitationId)) {
            $this->habilitation_id[] = $habilitationId;
        }

        return $this;
    }

    public function removeHabilitationId(Habilitation $habilitationId): self
    {
        $this->habilitation_id->removeElement($habilitationId);

        return $this;
    }

    public function getJuryId(): ?Jury
    {
        return $this->jury_id;
    }

    public function setJuryId(?Jury $jury_id): self
    {
        $this->jury_id = $jury_id;

        return $this;
    }
}
