<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepriseRepository::class)
 */
class Entreprise
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
    private $raison_sociale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse_entreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code_postal_entreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville_entreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone_entreprise;

    /**
     * @ORM\OneToMany(targetEntity=ResponsableEntreprise::class, mappedBy="entreprise_id")
     */
    private $responsableEntreprises;

    public function __construct()
    {
        $this->responsableEntreprises = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRaisonSociale(): ?string
    {
        return $this->raison_sociale;
    }

    public function setRaisonSociale(string $raison_sociale): self
    {
        $this->raison_sociale = $raison_sociale;

        return $this;
    }

    public function getAdresseEntreprise(): ?string
    {
        return $this->adresse_entreprise;
    }

    public function setAdresseEntreprise(?string $adresse_entreprise): self
    {
        $this->adresse_entreprise = $adresse_entreprise;

        return $this;
    }

    public function getCodePostalEntreprise(): ?string
    {
        return $this->code_postal_entreprise;
    }

    public function setCodePostalEntreprise(?string $code_postal_entreprise): self
    {
        $this->code_postal_entreprise = $code_postal_entreprise;

        return $this;
    }

    public function getVilleEntreprise(): ?string
    {
        return $this->ville_entreprise;
    }

    public function setVilleEntreprise(?string $ville_entreprise): self
    {
        $this->ville_entreprise = $ville_entreprise;

        return $this;
    }

    public function getTelephoneEntreprise(): ?string
    {
        return $this->telephone_entreprise;
    }

    public function setTelephoneEntreprise(?string $telephone_entreprise): self
    {
        $this->telephone_entreprise = $telephone_entreprise;

        return $this;
    }

    /**
     * @return Collection|ResponsableEntreprise[]
     */
    public function getResponsableEntreprises(): Collection
    {
        return $this->responsableEntreprises;
    }

    public function addResponsableEntreprise(ResponsableEntreprise $responsableEntreprise): self
    {
        if (!$this->responsableEntreprises->contains($responsableEntreprise)) {
            $this->responsableEntreprises[] = $responsableEntreprise;
            $responsableEntreprise->setEntrepriseId($this);
        }

        return $this;
    }

    public function removeResponsableEntreprise(ResponsableEntreprise $responsableEntreprise): self
    {
        if ($this->responsableEntreprises->removeElement($responsableEntreprise)) {
            // set the owning side to null (unless already changed)
            if ($responsableEntreprise->getEntrepriseId() === $this) {
                $responsableEntreprise->setEntrepriseId(null);
            }
        }

        return $this;
    }
}
