<?php

namespace App\Entity;

use App\Repository\TitreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TitreRepository::class)
 */
class Titre
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
    private $libelle_court;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle_long;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $referentiel_libelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $referentiel_document;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $referentiel_date_debut;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $referentiel_date_fin;

    /**
     * @ORM\OneToMany(targetEntity=Niveau::class, mappedBy="titre")
     */
    private $niveau_id;

    /**
     * @ORM\OneToMany(targetEntity=Session::class, mappedBy="titres_id")
     */
    private $sessions;

    /**
     * @ORM\ManyToMany(targetEntity=Ccp::class, inversedBy="titres")
     */
    private $ccps_id;

    /**
     * @ORM\ManyToMany(targetEntity=Habilitation::class, inversedBy="titres")
     */
    private $habilitations_id;

    public function __construct()
    {
        $this->niveau_id = new ArrayCollection();
        $this->sessions = new ArrayCollection();
        $this->ccps_id = new ArrayCollection();
        $this->habilitations_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleCourt(): ?string
    {
        return $this->libelle_court;
    }

    public function setLibelleCourt(?string $libelle_court): self
    {
        $this->libelle_court = $libelle_court;

        return $this;
    }

    public function getLibelleLong(): ?string
    {
        return $this->libelle_long;
    }

    public function setLibelleLong(?string $libelle_long): self
    {
        $this->libelle_long = $libelle_long;

        return $this;
    }

    public function getReferentielLibelle(): ?string
    {
        return $this->referentiel_libelle;
    }

    public function setReferentielLibelle(?string $referentiel_libelle): self
    {
        $this->referentiel_libelle = $referentiel_libelle;

        return $this;
    }

    public function getReferentielDocument(): ?string
    {
        return $this->referentiel_document;
    }

    public function setReferentielDocument(?string $referentiel_document): self
    {
        $this->referentiel_document = $referentiel_document;

        return $this;
    }

    public function getReferentielDateDebut(): ?string
    {
        return $this->referentiel_date_debut;
    }

    public function setReferentielDateDebut(?string $referentiel_date_debut): self
    {
        $this->referentiel_date_debut = $referentiel_date_debut;

        return $this;
    }

    public function getReferentielDateFin(): ?string
    {
        return $this->referentiel_date_fin;
    }

    public function setReferentielDateFin(?string $referentiel_date_fin): self
    {
        $this->referentiel_date_fin = $referentiel_date_fin;

        return $this;
    }

    /**
     * @return Collection|Niveau[]
     */
    public function getNiveauId(): Collection
    {
        return $this->niveau_id;
    }

    public function addNiveauId(Niveau $niveauId): self
    {
        if (!$this->niveau_id->contains($niveauId)) {
            $this->niveau_id[] = $niveauId;
            $niveauId->setTitre($this);
        }

        return $this;
    }

    public function removeNiveauId(Niveau $niveauId): self
    {
        if ($this->niveau_id->removeElement($niveauId)) {
            // set the owning side to null (unless already changed)
            if ($niveauId->getTitre() === $this) {
                $niveauId->setTitre(null);
            }
        }

        return $this;
    }

    
    /**
     * @return Collection|Session[]
     */
    public function getSessions(): Collection
    {
        return $this->sessions;
    }

    public function addSession(Session $session): self
    {
        if (!$this->sessions->contains($session)) {
            $this->sessions[] = $session;
            $session->setTitresId($this);
        }

        return $this;
    }

    public function removeSession(Session $session): self
    {
        if ($this->sessions->removeElement($session)) {
            // set the owning side to null (unless already changed)
            if ($session->getTitresId() === $this) {
                $session->setTitresId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Ccp[]
     */
    public function getCcpsId(): Collection
    {
        return $this->ccps_id;
    }

    public function addCcpsId(Ccp $ccpsId): self
    {
        if (!$this->ccps_id->contains($ccpsId)) {
            $this->ccps_id[] = $ccpsId;
        }

        return $this;
    }

    public function removeCcpsId(Ccp $ccpsId): self
    {
        $this->ccps_id->removeElement($ccpsId);

        return $this;
    }

    /**
     * @return Collection|Habilitation[]
     */
    public function getHabilitationsId(): Collection
    {
        return $this->habilitations_id;
    }

    public function addHabilitationsId(Habilitation $habilitationsId): self
    {
        if (!$this->habilitations_id->contains($habilitationsId)) {
            $this->habilitations_id[] = $habilitationsId;
        }

        return $this;
    }

    public function removeHabilitationsId(Habilitation $habilitationsId): self
    {
        $this->habilitations_id->removeElement($habilitationsId);

        return $this;
    }
}
