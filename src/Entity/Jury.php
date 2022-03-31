<?php

namespace App\Entity;

use App\Repository\JuryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JuryRepository::class)
 */
class Jury
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
    private $nom_jury_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom_jury_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_jury_2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom_jury_2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_jury_3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom_jury_3;

    /**
     * @ORM\ManyToMany(targetEntity=Session::class, mappedBy="jury_id")
     */
    private $sessions;

    /**
     * @ORM\OneToMany(targetEntity=Utilisateur::class, mappedBy="jury_id")
     */
    private $utilisateurs;

    public function __construct()
    {
        $this->sessions = new ArrayCollection();
        $this->utilisateurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomJury1(): ?string
    {
        return $this->nom_jury_1;
    }

    public function setNomJury1(?string $nom_jury_1): self
    {
        $this->nom_jury_1 = $nom_jury_1;

        return $this;
    }

    public function getPrenomJury1(): ?string
    {
        return $this->prenom_jury_1;
    }

    public function setPrenomJury1(?string $prenom_jury_1): self
    {
        $this->prenom_jury_1 = $prenom_jury_1;

        return $this;
    }

    public function getNomJury2(): ?string
    {
        return $this->nom_jury_2;
    }

    public function setNomJury2(?string $nom_jury_2): self
    {
        $this->nom_jury_2 = $nom_jury_2;

        return $this;
    }

    public function getPrenomJury2(): ?string
    {
        return $this->prenom_jury_2;
    }

    public function setPrenomJury2(?string $prenom_jury_2): self
    {
        $this->prenom_jury_2 = $prenom_jury_2;

        return $this;
    }

    public function getNomJury3(): ?string
    {
        return $this->nom_jury_3;
    }

    public function setNomJury3(?string $nom_jury_3): self
    {
        $this->nom_jury_3 = $nom_jury_3;

        return $this;
    }

    public function getPrenomJury3(): ?string
    {
        return $this->prenom_jury_3;
    }

    public function setPrenomJury3(?string $prenom_jury_3): self
    {
        $this->prenom_jury_3 = $prenom_jury_3;

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
            $session->addJuryId($this);
        }

        return $this;
    }

    public function removeSession(Session $session): self
    {
        if ($this->sessions->removeElement($session)) {
            $session->removeJuryId($this);
        }

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
            $utilisateur->setJuryId($this);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): self
    {
        if ($this->utilisateurs->removeElement($utilisateur)) {
            // set the owning side to null (unless already changed)
            if ($utilisateur->getJuryId() === $this) {
                $utilisateur->setJuryId(null);
            }
        }

        return $this;
    }
}
