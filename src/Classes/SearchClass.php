<?php

namespace App\Classes;

Class SearchClass
{

    private $array = [];

    public function __construct()
    {
        
    }

    public function searchBySession($session)
    {
        $this->getSession($session);
        if($entreprise = $session->getEntrepriseId()) //if entreprise exists
        {
            $this->getEntreprise($entreprise);

            if( ($responsable = $entreprise->getResponsableEntreprises()) && ($responsable = $responsable[0]))
            {
                $this->getResponsable($responsable);
            }
        }

        if($titre = $session->getTitresId()) //if titre exists
        {
            $this->getTitre($titre);
            if($ccp = $titre->getCcpsId())
            {
                $this->getCcp($ccp);
            }
            if($habilitation = $titre->getHabilitationsId())
            {
                $this->getHabilitation($habilitation);
            }
            if(($niveau = $titre->getNiveauId())  && ($niveau = $niveau[0]))
            {
                $this->getNiveau($niveau);
            }
        }
        if($candidats = $session->getCandidats()) //if candidat exists
        {
            $this->getCandidatsIdentifications($candidats);
        }
        return $this->array;
    }

    /************************/

    function searchByCandidat($candidat)
    {
        $this->getCandidat($candidat);
        if( ($projet = $candidat->getProjets()) && ($projet = $projet[0]) )
        {
            $this->getProjet($projet);
            if( ($produit = $projet->getProduitId()) && ($produit = $produit[0]) )
            {
                $this->getProduit($produit);
            }
        }
        if($competence = $candidat->getCompetenceId())
        {
            $this->getCompetence($competence);
        }

        if(($session = $candidat->getSession()) && ($session = $session[0])) //if Session exists
        {
            $this->getSession($session);
        
            if( ($jour = $session->getJourId()) && ($jour = $jour[0]))
            {
                $this->getJour($jour);
            }

            if($entreprise = $session->getEntrepriseId()) //if entreprise exists
            {
                $this->getEntreprise($entreprise);
                if( ($responsable = $entreprise->getResponsableEntreprises()) && ($responsable = $responsable[0]))
                {
                    $this->getResponsable($responsable);
                }
            }

            if($titre = $session->getTitresId())
            {
                $this->getTitre($titre);
                if($ccp = $titre->getCcpsId())
                {
                    $this->getCcp($ccp);
                }
                if($habilitation = $titre->getHabilitationsId())
                {
                    $this->getHabilitation($habilitation);
                }
                if(($niveau = $titre->getNiveauId()) && ($niveau = $niveau[0]))
                {
                    $this->getNiveau($niveau);
                }
            }
        }
        return $this->array;
    }

    /************************/

    function searchByTitre($titre)
    {
        if($titre)
        {
            $this->getTitre($titre);
            if($ccp = $titre->getCcpsId())
            {
                $this->getCcp($ccp);
            }
            if($habilitation = $titre->getHabilitationsId())
            {
                $this->getHabilitation($habilitation);
            }
            if(($niveau = $titre->getNiveauId())  && ($niveau = $niveau[0]))
            {
                $this->getNiveau($niveau);
            }
        }
        return $this->array;
    }

    /************************/

    function getCandidatsIdentifications($candidats)
    {
        array_push($this->array, 'startcandidats');
        $i = 0;
        while($candidats[$i])
        {
            array_push($this->array, $candidats[$i]->getIdentification());
            $i++;
        }
        array_push($this->array, 'endcandidats');
    }

    function getCandidat($candidat)
    {
        array_push($this->array, 'startcandidat');
        array_push($this->array, $candidat->getIdentification());
        array_push($this->array, 'endcandidat');
    }

    function getCompetence($competence)
    {
        array_push($this->array, 'startcompetence');
        $i = 0;
        while($competence[$i])
        {
            array_push($this->array, $competence[$i]->getDescription());
            array_push($this->array, $competence[$i]->getCommentaire());
            $i++;
        }
        array_push($this->array, 'endcompetence');
    }

    function getProjet($projet)
    {
        array_push($this->array, 'startprojet');
        array_push($this->array, $projet->getNomProjet());
        array_push($this->array, 'endprojet');
    }

    function getProduit($produit)
    {
        array_push($this->array, 'startproduit');
        array_push($this->array, $produit->getNomProduit());
        array_push($this->array, 'endproduit');
    }

    /************************/

    function getSession($session)
    {
        array_push($this->array, 'startsession');
        array_push($this->array, $session->getIdentifiant()); 
        array_push($this->array, $session->getDateDebut());
        array_push($this->array, $session->getDateFin());
        array_push($this->array, 'endsession');
    }

    function getEntreprise($entreprise)
    {
        array_push($this->array, 'startentreprise');
        array_push($this->array, $entreprise->getRaisonSociale());
        array_push($this->array, 'endentreprise');
    }

    function getJour($jour)
    {
        array_push($this->array, 'startjour');
        array_push($this->array, $jour->getDateJour());
        array_push($this->array, 'endjour'); 
    }

    function getResponsable($responsable)
    {
        array_push($this->array, 'startresponsable');
        array_push($this->array, $responsable->getFonctionResponsableEntreprise());
        array_push($this->array, 'endresponsable'); 
    }

    /************************/

    function getTitre($titre)
    {
        array_push($this->array, 'starttitre');
        array_push($this->array, $titre->getLibelleCourt()); 
        array_push($this->array, $titre->getReferentielDocument());
        array_push($this->array, 'endtitre');
    }

    function getNiveau($niveau)
    {
        array_push($this->array, 'startniveau');
        array_push($this->array, $niveau->getCodeNiveau());
        array_push($this->array, $niveau->getLibelleNiveau());
        array_push($this->array, 'endniveau');
    }

    function getCcp($ccp)
    {
        array_push($this->array, 'startccp');
        $i = 0;
        while($ccp[$i])
        {
            array_push($this->array, $ccp[$i]->getCodeCcp());
            array_push($this->array, $ccp[$i]->getLibelleCcp());
            $i++;
        }
        array_push($this->array, 'endccp');
    }

    function getHabilitation($habilitation)
    {
        array_push($this->array, 'starthab');
        $i = 0;
        while($habilitation[$i])
        {
            array_push($this->array, $habilitation[$i]->getTitreHabilitation());
            array_push($this->array, $habilitation[$i]->getDateDebutHabilitation());
            array_push($this->array, $habilitation[$i]->getDateFinHabilitation());
            $i++;
        }
        array_push($this->array, 'endhab');
    }
}