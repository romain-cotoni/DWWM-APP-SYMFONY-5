<?php

namespace App\Entity;

use App\Repository\SessionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SessionRepository::class)
 */
class Session
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
    private $identifiant;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_debut;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_fin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_jours;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $responsable;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $site_session;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @ORM\ManyToMany(targetEntity=Candidat::class, mappedBy="session")
     */
    private $candidats;

    /**
     * @ORM\OneToOne(targetEntity=Entreprise::class, cascade={"persist", "remove"})
     */
    private $entreprise_id;

    /**
     * @ORM\ManyToMany(targetEntity=Jury::class, inversedBy="sessions")
     */
    private $jury_id;

    /**
     * @ORM\ManyToMany(targetEntity=Jour::class, inversedBy="sessions")
     */
    private $jour_id;

    /**
     * @ORM\ManyToOne(targetEntity=Titre::class, inversedBy="sessions")
     */
    private $titres_id;

    public function __construct()
    {
        $this->candidats = new ArrayCollection();
        $this->jury_id   = new ArrayCollection();
        $this->jour_id   = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getIdentifiant();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(string $identifiant): self
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(?\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(?\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getNbJours(): ?int
    {
        return $this->nb_jours;
    }

    public function setNbJours(?int $nb_jours): self
    {
        $this->nb_jours = $nb_jours;

        return $this;
    }

    public function getResponsable(): ?string
    {
        return $this->responsable;
    }

    public function setResponsable(?string $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getSiteSession(): ?string
    {
        return $this->site_session;
    }

    public function setSiteSession(?string $site_session): self
    {
        $this->site_session = $site_session;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(?string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * @return Collection|Candidat[]
     */
    public function getCandidats(): Collection
    {
        return $this->candidats;
    }

    public function addCandidat(Candidat $candidat): self
    {
        if (!$this->candidats->contains($candidat)) {
            $this->candidats[] = $candidat;
            $candidat->addSession($this);
        }

        return $this;
    }

    public function removeCandidat(Candidat $candidat): self
    {
        if ($this->candidats->removeElement($candidat)) {
            $candidat->removeSession($this);
        }

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

    /**
     * @return Collection|Jury[]
     */
    public function getJuryId(): Collection
    {
        return $this->jury_id;
    }

    public function addJuryId(Jury $juryId): self
    {
        if (!$this->jury_id->contains($juryId)) {
            $this->jury_id[] = $juryId;
        }

        return $this;
    }

    public function removeJuryId(Jury $juryId): self
    {
        $this->jury_id->removeElement($juryId);

        return $this;
    }

    /**
     * @return Collection|Jour[]
     */
    public function getJourId(): Collection
    {
        return $this->jour_id;
    }

    public function addJourId(Jour $jourId): self
    {
        if (!$this->jour_id->contains($jourId)) {
            $this->jour_id[] = $jourId;
        }

        return $this;
    }

    public function removeJourId(Jour $jourId): self
    {
        $this->jour_id->removeElement($jourId);

        return $this;
    }

    public function getTitresId(): ?Titre
    {
        return $this->titres_id;
    }

    public function setTitresId(?Titre $titres_id): self
    {
        $this->titres_id = $titres_id;

        return $this;
    }

}
