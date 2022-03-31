<?php

namespace App\Entity;

use App\Repository\ResponsableEntrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResponsableEntrepriseRepository::class)
 */
class ResponsableEntreprise
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
    private $nom_responsable_entreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom_responsable_entreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fonction_responsable_entreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel_fixe_responsable_entreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel_mob_responsable_entreprise;

    /**
     * @ORM\ManyToOne(targetEntity=Entreprise::class, inversedBy="responsableEntreprises")
     */
    private $entreprise_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomResponsableEntreprise(): ?string
    {
        return $this->nom_responsable_entreprise;
    }

    public function setNomResponsableEntreprise(?string $nom_responsable_entreprise): self
    {
        $this->nom_responsable_entreprise = $nom_responsable_entreprise;

        return $this;
    }

    public function getPrenomResponsableEntreprise(): ?string
    {
        return $this->prenom_responsable_entreprise;
    }

    public function setPrenomResponsableEntreprise(?string $prenom_responsable_entreprise): self
    {
        $this->prenom_responsable_entreprise = $prenom_responsable_entreprise;

        return $this;
    }

    public function getFonctionResponsableEntreprise(): ?string
    {
        return $this->fonction_responsable_entreprise;
    }

    public function setFonctionResponsableEntreprise(?string $fonction_responsable_entreprise): self
    {
        $this->fonction_responsable_entreprise = $fonction_responsable_entreprise;

        return $this;
    }

    public function getTelFixeResponsableEntreprise(): ?string
    {
        return $this->tel_fixe_responsable_entreprise;
    }

    public function setTelFixeResponsableEntreprise(?string $tel_fixe_responsable_entreprise): self
    {
        $this->tel_fixe_responsable_entreprise = $tel_fixe_responsable_entreprise;

        return $this;
    }

    public function getTelMobResponsableEntreprise(): ?string
    {
        return $this->tel_mob_responsable_entreprise;
    }

    public function setTelMobResponsableEntreprise(?string $tel_mob_responsable_entreprise): self
    {
        $this->tel_mob_responsable_entreprise = $tel_mob_responsable_entreprise;

        return $this;
    }

    public function getEntrepriseId(): ?Entreprise
    {
        return $this->entreprise_id;
    }

    public function setEntrepriseId(?Entreprise $entreprise_id): self
    {
        $this->entreprise_id = $entreprise_id;

        return $this;
    }
}
