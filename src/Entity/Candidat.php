<?php

namespace App\Entity;

use App\Repository\CandidatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidatRepository::class)
 */
class Candidat
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
    private $identification;

    /**
     * @ORM\ManyToMany(targetEntity=Session::class, inversedBy="candidats")
     */
    private $session;

    /**
     * @ORM\ManyToMany(targetEntity=Competence::class, inversedBy="candidats")
     */
    private $competence_id;

    /**
     * @ORM\OneToMany(targetEntity=Projet::class, mappedBy="candidat_id")
     */
    private $projets;

    public function __construct()
    {
        $this->session = new ArrayCollection();
        $this->competence_id = new ArrayCollection();
        $this->projets = new ArrayCollection();
    }

    
    public function __toString() 
    {
        return $this->identification;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    public function setIdentification(string $identification): self
    {
        $this->identification = $identification;

        return $this;
    }

    /**
     * @return Collection|Session[]
     */
    public function getSession(): Collection
    {
        return $this->session;
    }

    public function addSession(Session $session): self
    {
        if (!$this->session->contains($session)) {
            $this->session[] = $session;
        }

        return $this;
    }

    public function removeSession(Session $session): self
    {
        $this->session->removeElement($session);

        return $this;
    }

    /**
     * @return Collection|Competence[]
     */
    public function getCompetenceId(): Collection
    {
        return $this->competence_id;
    }

    public function addCompetenceId(Competence $competenceId): self
    {
        if (!$this->competence_id->contains($competenceId)) {
            $this->competence_id[] = $competenceId;
        }

        return $this;
    }

    public function removeCompetenceId(Competence $competenceId): self
    {
        $this->competence_id->removeElement($competenceId);

        return $this;
    }

    /**
     * @return Collection|Projet[]
     */
    public function getProjets(): Collection
    {
        return $this->projets;
    }

    public function addProjet(Projet $projet): self
    {
        if (!$this->projets->contains($projet)) {
            $this->projets[] = $projet;
            $projet->setCandidatId($this);
        }

        return $this;
    }

    public function removeProjet(Projet $projet): self
    {
        if ($this->projets->removeElement($projet)) {
            // set the owning side to null (unless already changed)
            if ($projet->getCandidatId() === $this) {
                $projet->setCandidatId(null);
            }
        }

        return $this;
    }
}
