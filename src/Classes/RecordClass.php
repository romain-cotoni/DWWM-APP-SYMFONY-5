<?php

namespace App\Classes;

use App\Entity\Candidat;
use App\Entity\Ccp;
use App\Entity\Competence;
use App\Entity\Entreprise;
use App\Entity\Habilitation;
use App\Entity\Jour;
use App\Entity\Niveau;
use App\Entity\Produit;
use App\Entity\Projet;
use App\Entity\ResponsableEntreprise;
use App\Entity\Session;
use App\Entity\Titre;

Class RecordClass
{
    private $entityManager;
    private $repositorySession;
    private $repositoryJour;
    private $repositoryCandidat;
    private $repositoryCompetence;
    private $repositoryTitre;
    private $repositoryCcp;
    private $repositoryHabilitation;
    private $form;

    public function __construct($doctrine)
    { 
        $this->entityManager          = $doctrine->getManager();
        $this->repositorySession      = $this->entityManager->getRepository(Session::class);
        $this->repositoryJour         = $this->entityManager->getRepository(Jour::class);
        $this->repositoryCandidat     = $this->entityManager->getRepository(Candidat::class);
        $this->repositoryCompetence   = $this->entityManager->getRepository(Competence::class);
        $this->repositoryTitre        = $this->entityManager->getRepository(Titre::class);
        $this->repositoryCcp          = $this->entityManager->getRepository(Ccp::class);
        $this->repositoryHabilitation = $this->entityManager->getRepository(Habilitation::class);
    }

    public function associerTitreToSession($libelle,$identifiant)
    { 
        $session = $this->repositorySession->findBy(['identifiant' => $identifiant])[0];
        $titre   = $this->repositoryTitre->findBy(['libelle_court' => $libelle])[0];

        $session->setTitresId($titre);
        $this->entityManager->persist($session);
        $this->entityManager->flush();
        $search = new SearchClass();
        return $search->searchByTitre($titre);
    }
    
    public function associerSessionToCandidat($identifiant, $selectIdentifiant, $identification)
    {
        $candidat   = $this->repositoryCandidat->findBy(['identification' => $identification])[0];
        $oldSession = $this->repositorySession->findBy(['identifiant' => $identifiant])[0]; 
        $newSession = $this->repositorySession->findBy(['identifiant' => $selectIdentifiant])[0];
        $candidat->removeSession($oldSession);
        $candidat->addSession($newSession);
        $this->entityManager->persist($candidat);
        $this->entityManager->flush();
        $search = new SearchClass();
        return $search->searchBySession($newSession);
    }

    /********************/
    
    public function recordSession($form)
    {
        $this->form = $form;
        if($session = $this->repositorySession->findBy(['identifiant' => $this->form[0]])) $session = $session[0];
        else 
        {
            $session = new Session();
        }
        $this->setSession($session);
        
        if(!$entreprise = $session->getEntrepriseId())
        {
            $entreprise = new Entreprise();//creer entreprise si n'existe pas
            $session->setEntrepriseId($entreprise);
        }
        $this->setEntreprise($entreprise);
        $this->entityManager->persist($entreprise);
        $this->entityManager->flush();

        if( !($responsable = $entreprise->getResponsableEntreprises()[0]) )
        {
            $responsable = new ResponsableEntreprise();
            $entreprise->addResponsableEntreprise($responsable);
        }
        $this->setResponsable($responsable);

        $this->entityManager->persist($responsable);
        $this->entityManager->flush();
        $this->entityManager->persist($entreprise);
        $this->entityManager->flush();
        $this->entityManager->persist($session);
        $this->entityManager->flush();
    }
    /********************/

    public function recordCandidat($form)
    {
        $this->form = $form;
        if($candidat = $this->repositoryCandidat->findBy(['identification' => $this->form[0]])) $candidat = $candidat[0];
        else 
        {
            $candidat = new Candidat();
        }
        $this->setCandidat($candidat);

        if( ($session = ($this->repositorySession->findBy(['identifiant' => $this->form[1]])[0])) );
        {
            $this->entityManager->persist($candidat); //enregistre en db candidat si session existe
            $this->entityManager->flush();
            $session->addCandidat($candidat);
            $this->entityManager->persist($session);
            $this->entityManager->flush();
        }
        if( !($projet = $candidat->getProjets()[0]) )
        {
            $projet = new Projet(); //creer projet si n'existe pas
            $candidat->addProjet($projet);
        }
        $this->setProjet($projet);
        $this->entityManager->persist($projet);
        $this->entityManager->flush();

        if( !($produit = $projet->getProduitId()[0]) )
        {
            $produit = new Produit();
            $projet->addProduitId($produit);
        }
        $this->setProduit($produit);
        $this->entityManager->persist($produit);
        $this->entityManager->flush();
    }

    /********************/

    public function recordTitre($form)
    {
        $this->form = $form;
        if($titre = $this->repositoryTitre->findBy(['libelle_court' => $this->form[0]])) $titre = $titre[0];
        else
        {
            $titre = new Titre();
        }
        $this->setTitre($titre);
        $this->entityManager->persist($titre);

        if(!($niveau = $titre->getNiveauId()[0]))
        {
            $niveau = new Niveau();//creer niveau si n'existe pas
            $titre->addNiveauId($niveau);
        }
        $this->setNiveau($niveau);
        $this->entityManager->persist($niveau);
        $this->entityManager->flush();
    }

    /********************/

    public function recordJour($identifiant, $input_jour)
    {
        if( ($session = ($this->repositorySession->findBy(['identifiant' => $identifiant])[0])) );
        {
            if($jour = $this->repositoryJour->findBy(['date_jour' => $this->stringToDate($input_jour)])) $jour = $jour[0];
            else 
            {
                $jour = new Jour();
                $this->setJour($jour,$input_jour);
                $this->entityManager->persist($jour);
                $this->entityManager->flush();
            }
            $session->addJourId($jour);
            $this->entityManager->persist($session);
            $this->entityManager->flush();
        }
    }

    /********************/

    function recordSelectCompetence($identification,$description)
    {        
        if($candidat = $this->repositoryCandidat->findBy(['identification' => $identification]))
        {
            $candidat = $candidat[0];
            if($competence = $this->repositoryCompetence->findBy(['description' => $description]))
            {
                $competence = $competence[0];
                $candidat->addCompetenceId($competence); 
                $this->entityManager->persist($candidat);
                $this->entityManager->flush();
                return $competence->getCommentaire();
            }
        }
    }

    function recordCompetence($form)
    {
        $this->form = $form;
        if($candidat = $this->repositoryCandidat->findBy(['identification' => $this->form[0]])[0])
        {
            $competence = new Competence(); 
            $candidat->addCompetenceId($competence);
        }
        $this->setCompetence($competence);
        $this->entityManager->persist($competence);
        $this->entityManager->flush();
    }

    /********************/

    function recordSelectCcp($libelle_court, $libelle_ccp)
    {        
        if($titre = $this->repositoryTitre->findBy(['libelle_court' => $libelle_court]))
        {
            $titre = $titre[0];
            if($ccp = $this->repositoryCcp->findBy(['libelle_ccp' => $libelle_ccp]))
            {
                $ccp = $ccp[0];
                $titre->addCcpsId($ccp); 
                $this->entityManager->persist($titre);
                $this->entityManager->flush();
                return $ccp->getCodeCcp();
            }
        }
    }

    function recordCcp($form)
    {
        $this->form = $form;
        if($titre = $this->repositoryTitre->findBy(['libelle_court' => $this->form[0]])[0])
        {
            $ccp = new Ccp(); 
            $titre->addCcpsId($ccp);
        }
        $this->setCcp($ccp);
        $this->entityManager->persist($ccp);
        $this->entityManager->flush();
    }

    /********************/

    function recordSelectHabilitation($libelle_court, $titre_habilitation)
    {        
        if($titre = $this->repositoryTitre->findBy(['libelle_court' => $libelle_court]))
        {
            $titre = $titre[0];
            if($habilitation = $this->repositoryHabilitation->findBy(['titre_habilitation' => $titre_habilitation]))
            {
                $habilitation = $habilitation[0];
                $titre->addHabilitationsId($habilitation); 
                $this->entityManager->persist($titre);
                $this->entityManager->flush();
                return [$habilitation->getDateDebutHabilitation(),$habilitation->getDateFinHabilitation()];
            }
        }
    }

    function recordHabilitation($form)
    {
        $this->form = $form;
        if($titre = $this->repositoryTitre->findBy(['libelle_court' => $this->form[0]])[0])
        {
            $habilitation = new Habilitation(); 
            $titre->addHabilitationsId($habilitation);
        }
        $this->setHabilitation($habilitation);
        $this->entityManager->persist($habilitation);
        $this->entityManager->flush();
    }

    /**********************/

    public function setSession($session)
    {
        $session->setIdentifiant($this->form[0]);
        $session->setDateDebut($this->stringToDate($this->form[1]));
        $session->setDateFin($this->stringToDate($this->form[2]));
    }

    public function setJour($jour,$input_jour)
    {
        $jour->setDateJour($this->stringToDate($input_jour));
    }

    public function setEntreprise($entreprise)
    {
        $entreprise->setRaisonSociale($this->form[3]);
        $entreprise->setTelephone($this->form[4]);
    }

    public function setResponsable($responsable)
    {
        $responsable->setNomResponsableEntreprise($this->form[5]);
        $responsable->setFonctionResponsableEntreprise($this->form[6]);
    }

    /********************/

    public function setCandidat($candidat)
    {
        $candidat->setIdentification($this->form[0]);
    }

    public function setCompetence($competence)
    {
        $competence->setDescription($this->form[4]);
        $competence->setCommentaire($this->form[5]);
    }

    public function setProjet($projet)
    {
        $projet->setNomProjet($this->form[2]);
    }

    public function setProduit($produit)
    {
        $produit->setNomProduit($this->form[3]);
    }

   /********************/

    public function setTitre($titre)
    {
        $titre->setLibelleCourt($this->form[0]);
        $titre->setReferentielDocument($this->form[1]);
    }

    public function setCcp($ccp)
    {
        $ccp->setCodeCcp($this->form[1]);
        $ccp->setLibelleCcp($this->form[2]);
    }

    public function setHabilitation($habilitation)
    {
        $habilitation->setTitreHabilitation($this->form[1]);
        $habilitation->setDateDebutHabilitation($this->stringToDate($this->form[2]));
        $habilitation->setDateFinHabilitation($this->stringToDate($this->form[3]));
    }

    public function setNiveau($niveau)
    {
        $niveau->setCodeNiveau($this->form[2]);
        $niveau->setLibelleNiveau($this->form[3]);
    }

    /********************/

    public function stringToDate($date)
    {
        $date = explode('-', $date);
        return new \DateTime('@'.strtotime($date[2]."-".$date['1']."-".$date[0]));
    }

    
}

