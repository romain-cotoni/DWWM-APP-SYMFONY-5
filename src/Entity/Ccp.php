<?php

namespace App\Entity;

use App\Repository\CcpRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CcpRepository::class)
 */
class Ccp
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
    private $code_ccp;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle_ccp;

    /**
     * @ORM\ManyToOne(targetEntity=Titre::class, inversedBy="ccp_id")
     */
    private $titre;

    /**
     * @ORM\ManyToMany(targetEntity=Titre::class, mappedBy="ccps_id")
     */
    private $titres;

    public function __construct()
    {
        $this->titres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeCcp(): ?string
    {
        return $this->code_ccp;
    }

    public function setCodeCcp(?string $code_ccp): self
    {
        $this->code_ccp = $code_ccp;

        return $this;
    }

    public function getLibelleCcp(): ?string
    {
        return $this->libelle_ccp;
    }

    public function setLibelleCcp(?string $libelle_ccp): self
    {
        $this->libelle_ccp = $libelle_ccp;

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
            $titre->addCcpsId($this);
        }

        return $this;
    }

    public function removeTitre(Titre $titre): self
    {
        if ($this->titres->removeElement($titre)) {
            $titre->removeCcpsId($this);
        }

        return $this;
    }
}
