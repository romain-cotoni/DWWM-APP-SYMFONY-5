<?php

namespace App\Controller;

use App\Classes\CandidatClass;
use App\Classes\CcpClass;
use App\Classes\CompetenceClass;
use App\Classes\EntrepriseClass;
use App\Classes\HabilitationClass;
use App\Classes\JourClass;
use App\Classes\JuryClass;
use App\Classes\NiveauClass;
use App\Classes\ProduitClass;
use App\Classes\ProjetClass;
use App\Classes\ResponsableEntrepriseClass;
use App\Classes\SessionClass;
use App\Classes\TitreClass;
use App\Classes\UtilisateurClass;
use App\Entity\Candidat;
use App\Entity\Competence;
use App\Entity\Ccp;
use App\Entity\Jour;
use App\Entity\Habilitation;
use App\Entity\Jury;
use App\Entity\Session;
use App\Entity\Utilisateur;
use App\Form\AppType;
use App\Form\CandidatType;
use App\Form\SearchType;
use App\Form\SessionType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController2 extends AbstractController
{
    private $formCandidat;
    private $formSession;
    private $formSearch;
    private $form;
    private $entityManager;
    private $repositoryCandidat;
    private $repositorySession;
    private $repositoryCompetence;
    private $repositoryUtilisateur;
    private $repositoryHabilitation;
    private $competences;
    private $ccps;
    private $jours;
    private $habilitations;
    private $identification;
    
    
    /**
     * @Route("/app2", name="app2")
     */
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {     
        $this->entityManager          = $doctrine->getManager(); 
        $this->formCandidat           = $this->createForm(CandidatType::class);         
        $this->formSession            = $this->createForm(SessionType::class);       
        $this->formSearch             = $this->createForm(SearchType::class); 
        $this->form                   = $this->createForm(AppType::class);        
        $this->repositoryCandidat     = $this->entityManager->getRepository(Candidat::class);
        $this->repositorySession      = $this->entityManager->getRepository(Session::class);
        $this->repositoryCompetence   = $this->entityManager->getRepository(Competence::class);
        $this->repositoryUtilisateur  = $this->entityManager->getRepository(Utilisateur::class);
        $this->repositoryHabilitation = $this->entityManager->getRepository(Habilitation::class);
       
        $this->competences            = new Competence();
        $this->ccps                   = new Ccp();
        $this->jours                  = new Jour();
        $this->habilitations          = new Habilitation();

        $this->formCandidat->handleRequest($request);
        $this->formSession->handleRequest($request); 
        $this->formSearch->handleRequest($request); 
        $this->form->handleRequest($request);        
       
        //$test = $this->repositoryCandidat->findBySession(4);
        //dd(gettype($test[1]->getIdentification()));
        
        
        if($this->formSearch->get('searchCandidat')->isClicked())
        {                  
            $this->searchByCandidat(); //search by candidat
        }
        elseif($this->formSearch->get('searchSession')->isClicked())
        {                  
            $this->searchBySession(); //search by Session
        }

        if($this->formCandidat->get('chercher')->isClicked())
        {                  
            $this->searchByCandidat(); //search by candidat
        }
        
        if($this->formSession->get('chercher')->isClicked())
        {                  
            $this->searchBySession(); //search by Session
        }
            
        if($this->form->get('reset')->isClicked())
        {
            $this->cleanForm();
        }       
        
        if($this->form->get('add_session')->isClicked())
        {     
            $Session = new SessionClass($this->entityManager, $this->getCandidatform(), $this->getSessionForm());
            $Session->addSession();
        }
        
        if($session = $this->form->get('identifiant')->getViewData())
            $session = $this->repositorySession->findBy(['identifiant'=> $session])[0];


        if($this->form->get('session_changer')->isClicked())
        {   
            
            if($idCandidat   = $this->form->get('identification')->getViewData())
                if($candidat = $this->repositoryCandidat->findBy(['identification' => $idCandidat])[0])
                {
                    if($oldsession =  $this->form->get('identifiant')->getViewData())
                        if($oldsession =  $this->repositorySession->findBy(['identifiant' => $oldsession])[0])
                            $candidat->removeSession($oldsession);

                    if($newsession =  $this->form->get('session')->getViewData())
                        if($newsession =  $this->repositorySession->find($newsession))
                            $candidat->addSession($newsession);
                            
                    $this->entityManager->persist($candidat);
                    $this->entityManager->flush(); //enregistrement dans l'entity candidat                                                             
                }
        }

        if($this->form->get('add_candidat')->isClicked())
        {     
            if($session)
                $Candidat = new CandidatClass($this->entityManager, $session, $this->getCandidatForm());
            else 
                $Candidat = new CandidatClass($this->entityManager, null, $this->getCandidatForm());
            $msg = $Candidat->addCandidat();
            $this->addFlash(
                'notice',
                $msg
            );
            
        }
       
        
        if($this->form->get('delete_candidat')->isClicked())
        {    
            if($session)
            {
                $Candidat = new CandidatClass($this->entityManager, $session, $this->getCandidatForm());
                $Candidat->deleteCandidat();
            }
            else 
            {                
                if($idCandidat   = $this->form->get('identification')->getViewData())
                    if($candidat   = $this->repositoryCandidat->findBy(['identification' => $idCandidat]))
                    {
                        $candidat = $candidat[0];
                        $Candidat = new CandidatClass($this->entityManager, null, $this->getCandidatForm());
                        $Candidat->deleteCandidat();                     
                    }
            }
        }

        if($session)
        {  
            if($this->form->get('delete_session')->isClicked())
            {     
                $Session = new SessionClass($this->entityManager, null, $this->getSessionForm());
                $Session->deleteSession();
            }            

            else if($this->form->get('add_entreprise')->isClicked())
            {     
                $Entreprise = new EntrepriseClass($this->entityManager, $session, $this->getEntrepriseForm());
                $Entreprise->addEntreprise();
            }

            else if($this->form->get('delete_entreprise')->isClicked())
            {     
                $Entreprise = new EntrepriseClass($this->entityManager, $session, $this->getEntrepriseForm());
                $Entreprise->deleteEntreprise();
            }

            else if($this->form->get('add_responsable')->isClicked())
            {     
                $Responsable = new ResponsableEntrepriseClass($this->entityManager, $session, $this->getResponsableEntrepriseForm());
                $Responsable->addResponsableEntreprise();
            }

            else if($this->form->get('delete_responsable')->isClicked())
            {     
                $Responsable = new ResponsableEntrepriseClass($this->entityManager, $session, $this->getResponsableEntrepriseForm());
                $Responsable->deleteResponsableEntreprise();
            }

            else if($this->form->get('add_jury')->isClicked())
            {     
                $Jury = new JuryClass($this->entityManager, $session, $this->getJuryForm());
                $Jury->addJury();
            }

            else if($this->form->get('delete_jury')->isClicked())
            {     
                $Jury = new JuryClass($this->entityManager, $session, $this->getJuryForm());
                $Jury->deleteJury();
            }

            else if($this->form->get('add_utilisateur_1')->isClicked())
            {     
                $Utilisateur1 = new UtilisateurClass($this->entityManager, $session, $this->getUtilisateurForm());
                $Utilisateur1->addUtilisateur1();
            }

            else if($this->form->get('add_utilisateur_2')->isClicked())
            {     
                $Utilisateur2 = new UtilisateurClass($this->entityManager, $session, $this->getUtilisateurForm());
                $Utilisateur2->addUtilisateur2();
            }

            else if($this->form->get('add_utilisateur_3')->isClicked())
            {     
                $Utilisateur3 = new UtilisateurClass($this->entityManager, $session, $this->getUtilisateurForm());
                $Utilisateur3->addUtilisateur3();
            }

            else if($this->form->get('delete_utilisateur_1')->isClicked())
            {     
                $Utilisateur1 = new UtilisateurClass($this->entityManager, $session, $this->getUtilisateurForm());
                $Utilisateur1->deleteUtilisateur1();
            }

            else if($this->form->get('add_titre')->isClicked())
            {     
                $Titre = new TitreClass($this->entityManager, $session, $this->getTitreForm());
                $Titre->addTitre();
            }

            else if($this->form->get('delete_titre')->isClicked())
            {     
                $Titre = new TitreClass($this->entityManager, $session, $this->getTitreForm());
                $Titre->deleteTitre();
            }

            else if($this->form->get('add_niveau')->isClicked())
            {     
                $Niveau = new NiveauClass($this->entityManager, $session, $this->getNiveauForm());
                $Niveau->addNiveau();
            }

            else if($this->form->get('delete_niveau')->isClicked())
            {     
                $Niveau = new NiveauClass($this->entityManager, $session, $this->getNiveauForm());
                $Niveau->deleteNiveau();
            }

            else if($this->form->get('add_projet')->isClicked())
            {     
                $Projet = new ProjetClass($this->entityManager, $session, $this->getProjetForm());
                $Projet->addProjet();
            }

            else if($this->form->get('delete_projet')->isClicked())
            {     
                $Projet = new ProjetClass($this->entityManager, $session, $this->getProjetForm());
                $Projet->deleteProjet();
            }

            else if($this->form->get('add_produit')->isClicked())
            {     
                $Produit = new ProduitClass($this->entityManager, $session, $this->getProduitForm());
                $Produit->addProduit();
            }

            else if($this->form->get('delete_produit')->isClicked())
            {     
                $Produit = new ProduitClass($this->entityManager, $session, $this->getProduitForm());
                $Produit->deleteProduit();
            }
                               
        }
                    
        
        if ($this->isGranted('ROLE_ADMIN')) 
        {         
           return $this->render('app/index.html.twig',[
                'pageName'      => 'app',
                'competences'   => $this->competences,
                'ccps'          => $this->ccps,
                'jours'         => $this->jours,
                'habilitations' => $this->habilitations,
                'formCandidat'  => $this->formCandidat->createView(),
                'formSession'   => $this->formSession->createView(),
                'formsearch'    => $this->formSearch->createView(),
                'form'          => $this->form->createView(),
            ]);
        }
        else 
        {
            return $this->redirectToRoute('app_login');
        }
    }

    /**                                                                                   
     * @Route("/ajax_mixcandidat", name="ajax_mixcandidat")
     */
    public function mixcandidat(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $session_value     = $request->get('session_value');
            $entityManager     = $doctrine->getManager();
            $repositorySession = $entityManager->getRepository(Session::class);            
            $candidats         = $repositorySession->findBy(['identifiant' => $session_value])[0]->getCandidats();
            $array = [];
            for($i = 0; $i < count($candidats); $i++)
            { 
                array_push($array, $candidats[$i]->getIdentification());
            }   
            return new JsonResponse(array('data' => $array));
        }
        return new Response('This is not ajax!', 400);    
    }

    

    public function fillSearchInSession($doctrine)
    {
        $this->entityManager     = $doctrine->getManager();
        $this->repositorySession = $this->entityManager->getRepository(Session::class);
        $array                   = [];
        $el                      = $this->repositorySession->findAll();
        $all                     = count($el);        
        for($i = 0; $i < $all; $i++)
            { array_push($array, $el[$i]->getIdentifiant());}
        return $array;
    }

    public function searchInSession($doctrine, $selectIdSession )
    {   
        $this->entityManager     = $doctrine->getManager();
        $this->repositorySession = $this->entityManager->getRepository(Session::class);
        $array                   = [];
        $el                      = $this->repositorySession->findBy(['identifiant' => $selectIdSession])[0]->getCandidats();
        $all                     = count($el);
        for($i = 0; $i < $all; $i++)
            { array_push($array, $el[$i]->getIdentification());}
        return $array;
    }

    public function searchInCandidat($doctrine, $select_search_candidat_content)
    {
        $this->entityManager      = $doctrine->getManager();
        $this->repositoryCandidat = $this->entityManager->getRepository(Candidat::class);
        $candidat                 = $this->repositoryCandidat->findBy(['identification' => $select_search_candidat_content]);
        $this->identification     = $candidat[0]->getIdentification();
        return $this->identification;
    }

    /**                                                                                   
     * @Route("/ajax_fill_select_session", name="ajax_fill_select_session")
     */
    public function ajaxActionFillSessionSelect(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            //$selectSession   = $request->get('selectSession');
            $result = $this->fillSearchInSession($doctrine);    
            return new JsonResponse(array('data' => $result));
        }
        return new Response('This is not ajax!', 400);        
    }

    /**                                                                                   
     * @Route("/ajax_select_session", name="ajax_select_session")
     */
    public function ajaxActionSessionSelect(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $selectIdSession   = $request->get('selectIdSession');
            $result          = $this->searchInSession($doctrine, $selectIdSession );    
            return new JsonResponse(array('data' => $result));
        }
        return new Response('This is not ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_select_candidat", name="ajax_select_candidat")
     */
    public function ajaxActionCandidatSelect(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest())
        { 
            $select_search_candidat_content = $request->get('select_search_candidat_content');
            $result = $this->searchInCandidat($doctrine, $select_search_candidat_content);
            return new JsonResponse(array('data' => $result));
        }
        return new Response('This is not ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_add_competence", name="ajax_add_competence")
     */
    public function ajaxActionCompetence(Request $request, ManagerRegistry $doctrine)    
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $selectCandidat    = $request->get('selectCandidat')  ;
            $selectDescription = $request->get('selectDescription');
            $selectCommentaire = $request->get('selectCommentaire');            
            $inputDescription  = $request->get('inputDescription');
            $inputCommentaire  = $request->get('inputCommentaire');    
            $Competence        = new CompetenceClass($doctrine,
                                                     $selectCandidat,
                                                     $selectDescription,
                                                     $selectCommentaire,
                                                     $inputDescription,
                                                     $inputCommentaire
                                                    );                  
            return new JsonResponse(array('data' => $Competence->addCompetenceAjax()));                                             
        }
        return new Response('This is not ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_add_ccp", name="ajax_add_ccp")
     */
    public function ajaxActionCcp(Request $request, ManagerRegistry $doctrine)    
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $inputTitre       = $request->get('inputTitre')  ;
            $selectCodeCcp    = $request->get('selectCodeCcp');
            //$selectLibelleCcp = $request->get('selectLibelleCcp');            
            $inputCodeCcp     = $request->get('inputCodeCcp');
            $inputLibelleCcp  = $request->get('inputLibelleCcp');    
            $Ccp              = new CcpClass($doctrine,$inputTitre,$selectCodeCcp,
                                             /*$selectLibelleCcp,*/
                                             $inputCodeCcp,
                                             $inputLibelleCcp
                                            );                  
            return new JsonResponse(array('data' => $Ccp->addCcpAjax()));                                             
        }
        return new Response('This is not ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_add_jour", name="ajax_add_jour")
     */
    public function ajaxActionJour(Request $request, ManagerRegistry $doctrine)    
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $inputSession = $request->get('inputSession') ;
            $selectJour   = $request->get('selectJour');
            $Jour         = new JourClass($doctrine,$inputSession,$selectJour);                  
            return new JsonResponse(array('data' => $Jour->addJourAjax()));                                             
        }
        return new Response('This is not ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_add_habilitation", name="ajax_add_habilitation")
     */
    public function ajaxActionHabilitation(Request $request, ManagerRegistry $doctrine)    
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $inputTitre                 = $request->get('inputTitre') ;
            $selectTitreHabilitation    = $request->get('selectTitreHabilitation');                        
            $inputTitreHabilitation     = $request->get('inputTitreHabilitation');
            $inputDateDebutHabilitation = $request->get('inputDateDebutHabilitation');
            $inputDateFinHabilitation   = $request->get('inputDateFinHabilitation');
            $Habilitation               = new HabilitationClass($doctrine,$inputTitre,
                                                        $selectTitreHabilitation,
                                                        $inputTitreHabilitation,
                                                        $inputDateDebutHabilitation,
                                                        $inputDateFinHabilitation,
                                                       ); 
            return new JsonResponse(array('data' => $Habilitation->addHabilitationAjax()));                                             
        }
        return new Response('This is not ajax!', 400);
    }

    /**
     * search by candidat select
     */
    public function searchByCandidat($idCandidat = null)
    {
        if($idCandidat == null)
            $id         = $this->formSearch->get('candidat')->getViewData();                   //get position in candidat select list             
            //$candidats  = array_values($this->formSearch->getViewData())[0]->getCandidats(); //get sessions in select
            //$idCandidat = $candidats[$id]->getIdentification();                              //get candidat from select                     
            //$idCandidat = array_values($this->formSearch->getViewData())[1]->getIdentification();                
            $idCandidat = array_values($this->formSearch->getViewData())[0]->getCandidats()[$id]->getIdentification();
            
        if($candidat = $this->repositoryCandidat->findByIdentification($idCandidat)[0])
        {            
            $this->form->get('identification')->setData($idCandidat);
        }
                       
        if($session = $candidat->getSession()[0]) //if Session exists
        {
            $this->form->get('identifiant')->setData($session->getIdentifiant());
            $this->form->get('date_debut')->setData($session->getDateDebut());
            $this->form->get('date_fin')->setData($session->getDateFin());
            $this->form->get('nombre_de_jours')->setData($session->getNbJours());
            $this->form->get('responsable')->setData($session->getResponsable());
            $this->form->get('telephone')->setData($session->getTelephone());
            $this->form->get('site_de_session')->setData($session->getSiteSession());
            $this->form->get('adresse')->setData($session->getAdresse());
            $this->form->get('code_postal')->setData($session->getCodePostal());
            $this->form->get('ville')->setData($session->getVille());
        }

        //get competences
        if($candidat)
        {   
            $this->competences = $candidat->getCompetenceId();
        }


        if($entreprise = $candidat->getSession()[0])
            if($entreprise = $entreprise->getEntrepriseId()) //if Entreprise exists
            {
                $this->form->get('raison_sociale')->setData($entreprise->getRaisonSociale());
                $this->form->get('adresse_entreprise')->setData($entreprise->getAdresseEntreprise());
                $this->form->get('code_postal_entreprise')->setData($entreprise->getCodePostalEntreprise());
                $this->form->get('ville_entreprise')->setData($entreprise->getVilleEntreprise());
                $this->form->get('telephone_entreprise')->setData($entreprise->getTelephoneEntreprise());

                if($responsable = $entreprise->getResponsableEntreprises()[0]) //if Responsable Entreprise exists
                {
                    $this->form->get('nom_responsable_entreprise')->setData($responsable->getNomResponsableEntreprise()); 
                    $this->form->get('prenom_responsable_entreprise')->setData($responsable->getPrenomResponsableEntreprise()); 
                    $this->form->get('fonction_responsable_entreprise')->setData($responsable->getFonctionResponsableEntreprise()); 
                    $this->form->get('tel_fixe_responsable_entreprise')->setData($responsable->getTelFixeResponsableEntreprise()); 
                    $this->form->get('tel_mob_responsable_entreprise')->setData($responsable->getTelMobResponsableEntreprise()); 
                }
            }        

        if($jury = $candidat->getSession()[0])
            if($jury = $jury->getJuryId()[0]) //if Jury exists
            {  
                $this->form->get('nom_jury_1')->setData($jury->getNomjury1());
                $this->form->get('prenom_jury_1')->setData($jury->getPrenomjury1());
                $this->form->get('nom_jury_2')->setData($jury->getNomjury2());
                $this->form->get('prenom_jury_2')->setData($jury->getPrenomjury2());
                $this->form->get('nom_jury_3')->setData($jury->getNomjury3());
                $this->form->get('prenom_jury_3')->setData($jury->getPrenomjury3());

                if($utilisateur1 = $jury->getUtilisateurs()[0]) //if Utilisateur exists
                {
                    $this->form->get('insee')->setData($utilisateur1->getInsee());
                    $this->form->get('nom_utilisateur')->setData($utilisateur1->getNomUtilisateur()); 
                    $this->form->get('prenom_utilisateur')->setData($utilisateur1->getPrenomUtilisateur());
                    $this->form->get('adresse_utilisateur')->setData($utilisateur1->getAdresseUtilisateur());
                    $this->form->get('code_postal_utilisateur')->setData($utilisateur1->getCodePostalUtilisateur()); 
                    $this->form->get('ville_utilisateur')->setData($utilisateur1->getVilleUtilisateur());
                    $this->form->get('tel_mob_utilisateur')->setData($utilisateur1->getTelMobUtilisateur()); 
                }
                if($utilisateur2 = $jury->getUtilisateurs()[1]) //if Utilisateur exists
                {
                    $this->form->get('insee2')->setData($utilisateur2->getInsee());
                    $this->form->get('nom_utilisateur2')->setData($utilisateur2->getNomUtilisateur()); 
                    $this->form->get('prenom_utilisateur2')->setData($utilisateur2->getPrenomUtilisateur());
                    $this->form->get('adresse_utilisateur2')->setData($utilisateur2->getAdresseUtilisateur());
                    $this->form->get('code_postal_utilisateur2')->setData($utilisateur2->getCodePostalUtilisateur()); 
                    $this->form->get('ville_utilisateur2')->setData($utilisateur2->getVilleUtilisateur());
                    $this->form->get('tel_mob_utilisateur2')->setData($utilisateur2->getTelMobUtilisateur()); 
                }
                if($utilisateur3 = $jury->getUtilisateurs()[2]) //if Utilisateur exists
                {
                    $this->form->get('insee3')->setData($utilisateur3->getInsee());
                    $this->form->get('nom_utilisateur3')->setData($utilisateur3->getNomUtilisateur()); 
                    $this->form->get('prenom_utilisateur3')->setData($utilisateur3->getPrenomUtilisateur());
                    $this->form->get('adresse_utilisateur3')->setData($utilisateur3->getAdresseUtilisateur());
                    $this->form->get('code_postal_utilisateur3')->setData($utilisateur3->getCodePostalUtilisateur()); 
                    $this->form->get('ville_utilisateur3')->setData($utilisateur3->getVilleUtilisateur());
                    $this->form->get('tel_mob_utilisateur3')->setData($utilisateur3->getTelMobUtilisateur()); 
                }
            }

        if($titre = $candidat->getSession()[0])
            if($titre = $titre->getTitreId()) //if Titre exists
            {
                $this->form->get('libelle_court')->setData($titre->getLibelleCourt());
                $this->form->get('libelle_long')->setData($titre->getLibelleLong());
                $this->form->get('referentiel_libelle')->setData($titre->getReferentielLibelle());
                $this->form->get('referentiel_document')->setData($titre->getReferentielDocument());
                $this->form->get('referentiel_date_debut')->setData($titre->getReferentielDateDebut());
                $this->form->get('referentiel_date_fin')->setData($titre->getReferentielDateFin());

                if($ccp = $titre->getCcpId())        //if Ccp exists
                {
                    $this->ccps = $ccp;           
                }

                if($niveau = $titre->getNiveauId()[0]) //if Niveau exists
                {
                    $this->form->get('code_niveau')->setData($niveau->getCodeNiveau()); 
                    $this->form->get('libelle_niveau')->setData($niveau->getLibelleNiveau());                  
                }

                if($habilitation = $titre->getHabilitations()) 
                {   
                    $this->habilitations = $habilitation;                
                }
            }                

        if($jour = $candidat->getSession()[0]) 
        {   
            if($jour = $jour->getJourId())        //if Jour exists
            {
                $this->jours = $jour;       
            }
        }        

        if($projet = $candidat->getProjets()[0]) //if projet exists
        { 
            $this->form->get('nom_projet')->setData($projet->getNomProjet());
            $this->form->get('commentaires')->setData($projet->getCommentaires()); 
        }

        if($produit = $candidat->getProjets()[0]) //if produit exists
        { 
            if($produit = $produit->getProduitId()[0]) 
            { 
                $this->form->get('nom_produit')->setData($produit->getNomProduit());
                $this->form->get('domaine')->setData($produit->getDomaine()); 
            }
        }

        if($jour = $candidat->getSession()[0])
            if($jour = $candidat->getSession()[0]->getJourId()[0]) //if Jour exists
            {  
                $this->form->get('date_jour')->setData($jour->getDateJour());
            }
    }

    /**
     * search by session select
     */
    public function searchBySession()
    {   
        //dd(array_values($this->formSession->getViewData())[0]->getIdentifiant());
        //if($idSession = $this->form->get('identifiant')->getViewData())     // get session from input
        if($idSession = array_values($this->formSession->getViewData())[0]->getIdentifiant()) // get session from select
        {  
            if($session = $this->repositorySession->findByIdentifiant($idSession)[0])
            {
                $this->form->get('identifiant')->setData($session->getIdentifiant());
                $this->form->get('date_debut')->setData($session->getDateDebut());
                $this->form->get('date_fin')->setData($session->getDateFin());
                $this->form->get('nombre_de_jours')->setData($session->getNbJours());
                $this->form->get('responsable')->setData($session->getResponsable());
                $this->form->get('telephone')->setData($session->getTelephone());
                $this->form->get('site_de_session')->setData($session->getSiteSession());
                $this->form->get('adresse')->setData($session->getAdresse());
                $this->form->get('code_postal')->setData($session->getCodePostal());
                $this->form->get('ville')->setData($session->getVille());
            }
        }        
        if($entreprise = $session->getEntrepriseId()) //if Entreprise exists
        {
            $this->form->get('raison_sociale')->setData($entreprise->getRaisonSociale());
            $this->form->get('adresse_entreprise')->setData($entreprise->getAdresseEntreprise());
            $this->form->get('code_postal_entreprise')->setData($entreprise->getCodePostalEntreprise());
            $this->form->get('ville_entreprise')->setData($entreprise->getVilleEntreprise());
            $this->form->get('telephone_entreprise')->setData($entreprise->getTelephoneEntreprise());

            if($responsable = $entreprise->getResponsableEntreprises()[0]) //if Responsable Entreprise exists
            {
                $this->form->get('nom_responsable_entreprise')->setData($responsable->getNomResponsableEntreprise()); 
                $this->form->get('prenom_responsable_entreprise')->setData($responsable->getPrenomResponsableEntreprise()); 
                $this->form->get('fonction_responsable_entreprise')->setData($responsable->getFonctionResponsableEntreprise()); 
                $this->form->get('tel_fixe_responsable_entreprise')->setData($responsable->getTelFixeResponsableEntreprise()); 
                $this->form->get('tel_mob_responsable_entreprise')->setData($responsable->getTelMobResponsableEntreprise()); 
            }
        }

        if($jury = $session->getJuryId()[0]) //if Jury exists
        {  
            $this->form->get('nom_jury_1')->setData($jury->getNomjury1());
            $this->form->get('prenom_jury_1')->setData($jury->getPrenomjury1());
            $this->form->get('nom_jury_2')->setData($jury->getNomjury2());
            $this->form->get('prenom_jury_2')->setData($jury->getPrenomjury2());
            $this->form->get('nom_jury_3')->setData($jury->getNomjury3());
            $this->form->get('prenom_jury_3')->setData($jury->getPrenomjury3());

            if($utilisateur1 = $jury->getUtilisateurs()[0]) //if Utilisateur exists
            {
                $this->form->get('insee')->setData($utilisateur1->getInsee());
                $this->form->get('nom_utilisateur')->setData($utilisateur1->getNomUtilisateur()); 
                $this->form->get('prenom_utilisateur')->setData($utilisateur1->getPrenomUtilisateur());
                $this->form->get('adresse_utilisateur')->setData($utilisateur1->getAdresseUtilisateur());
                $this->form->get('code_postal_utilisateur')->setData($utilisateur1->getCodePostalUtilisateur()); 
                $this->form->get('ville_utilisateur')->setData($utilisateur1->getVilleUtilisateur());
                $this->form->get('tel_mob_utilisateur')->setData($utilisateur1->getTelMobUtilisateur()); 
            }
            if($utilisateur2 = $jury->getUtilisateurs()[1]) //if Utilisateur exists
            {
                $this->form->get('insee2')->setData($utilisateur2->getInsee());
                $this->form->get('nom_utilisateur2')->setData($utilisateur2->getNomUtilisateur()); 
                $this->form->get('prenom_utilisateur2')->setData($utilisateur2->getPrenomUtilisateur());
                $this->form->get('adresse_utilisateur2')->setData($utilisateur2->getAdresseUtilisateur());
                $this->form->get('code_postal_utilisateur2')->setData($utilisateur2->getCodePostalUtilisateur()); 
                $this->form->get('ville_utilisateur2')->setData($utilisateur2->getVilleUtilisateur());
                $this->form->get('tel_mob_utilisateur2')->setData($utilisateur2->getTelMobUtilisateur()); 
            }
            if($utilisateur3 = $jury->getUtilisateurs()[2]) //if Utilisateur exists
            {
                $this->form->get('insee3')->setData($utilisateur3->getInsee());
                $this->form->get('nom_utilisateur3')->setData($utilisateur3->getNomUtilisateur()); 
                $this->form->get('prenom_utilisateur3')->setData($utilisateur3->getPrenomUtilisateur());
                $this->form->get('adresse_utilisateur3')->setData($utilisateur3->getAdresseUtilisateur());
                $this->form->get('code_postal_utilisateur3')->setData($utilisateur3->getCodePostalUtilisateur()); 
                $this->form->get('ville_utilisateur3')->setData($utilisateur3->getVilleUtilisateur());
                $this->form->get('tel_mob_utilisateur3')->setData($utilisateur3->getTelMobUtilisateur()); 
            }
        }

        if($titre = $session->getTitreId()) //if Titre exists
        {
            $this->form->get('libelle_court')->setData($titre->getLibelleCourt());
            $this->form->get('libelle_long')->setData($titre->getLibelleLong());
            $this->form->get('referentiel_libelle')->setData($titre->getReferentielLibelle());
            $this->form->get('referentiel_document')->setData($titre->getReferentielDocument());
            $this->form->get('referentiel_date_debut')->setData($titre->getReferentielDateDebut());
            $this->form->get('referentiel_date_fin')->setData($titre->getReferentielDateFin());
        
            if($ccp = $titre->getCcpId())   //if Ccp exists
            {
                $this->ccps = $ccp;           
            }

            if($niveau = $titre->getNiveauId()[0]) //if Niveau exists
            {
                $this->form->get('code_niveau')->setData($niveau->getCodeNiveau()); 
                $this->form->get('libelle_niveau')->setData($niveau->getLibelleNiveau());                  
            }

            if($habilitation = $titre->getHabilitations()) 
            {   
                $this->habilitations = $habilitation;                
            }
        }

        if($jour = $session->getJourId())  //if Jour exists
        {
            $this->jours = $jour;       
        }

    }

    public function addToDb()
    {                
        //create & add Session
        $Session = new SessionClass($this->entityManager, $this->getSessionForm());
        $session = $Session->addSession();

        //create & add Candidat
        $Candidat = new CandidatClass($this->entityManager, $session, $this->getCandidatForm());
        $candidat = $Candidat->addCandidat();

        //create & add Jour
        //$Jour = new JourClass($this->entityManager, $session, $this->getJourForm());
        //$jour = $Jour->addJour();
        
        //create & add Entreprise
        $Entreprise = new EntrepriseClass($this->entityManager,$session,$this->getEntrepriseForm());
        $entreprise = $Entreprise->addEntreprise();
        
        //create & add ResponsableEntreprise
        $Responsable = new ResponsableEntrepriseClass($this->entityManager, $entreprise, $this->getResponsableEntrepriseForm());
        $responsable = $Responsable->addResponsableEntreprise();

        //create & add Jury
        $Jury = new JuryClass($this->entityManager, $session, $this->getJuryForm());
        $jury = $Jury->addJury();

        //create & add Utilisateur1
        $Utilisateur1 = new UtilisateurClass($this->entityManager, $session, $jury, $this->getUtilisateurForm());
        $utilisateur1 = $Utilisateur1->addUtilisateur1();

        //create & add Utilisateur2
        $Utilisateur2 = new UtilisateurClass($this->entityManager, $jury, $this->getUtilisateurForm());
        $utilisateur2 = $Utilisateur2->addUtilisateur2();

        //create & add Utilisateur3
        $Utilisateur3 = new UtilisateurClass($this->entityManager, $jury, $this->getUtilisateurForm());
        $utilisateur3 = $Utilisateur3->addUtilisateur3();

        //create & add Titre
        $Titre = new TitreClass($this->entityManager, $session, $this->getTitreForm());
        $titre = $Titre->addTitre();

        //create & add Habilitation
        //$Habilitation = new HabilitationClass($this->entityManager, $utilisateur, $this->getHabilitationForm());
        //$habilitation = $Habilitation->addHabilitation();

        //create & add Ccp
        //$Ccp = new CcpClass($this->entityManager, $titre, $this->getCcpForm());
        //$ccp = $Ccp->addCcp();

        //create & add Niveau
        $Niveau = new NiveauClass($this->entityManager, $titre, $this->getNiveauForm());
        $niveau = $Niveau->addNiveau();                

        //create & add Projet
        $Projet = new ProjetClass($this->entityManager, $candidat, $this->getProjetForm());
        $projet = $Projet->addProjet();

        //create & add Produit
        $Produit = new ProduitClass($this->entityManager, $projet, $this->getProduitForm());
        $produit = $Produit->addProduit();
    }


    public function delFromDb()
    {
        $idCandidat = $this->form->get('identification')->getViewData();
        $candidat   = $this->repositoryCandidat->findByIdentification($idCandidat);
        $this->entityManager->remove($candidat[0]);
        $this->entityManager->flush();
    }


    /*public function updateInDb()
    {
        //get from form:
        $form = $this->getFromForm();

        //get candidat object
        $candidat = $this->repositoryCandidat->findByIdentification($form[0])[0];
        $session  = $candidat->getSession()[0];
        
        //remove session object from candidat object
        $candidat->removeSession($session);
        
        //check if session typed in form exist
        //if doesn't exist:
        if(!$session =$this->repositorySession->findBy(['identifiant' => $form[1]],))
        {
            //set session from form & record in db
            $this->setNewSession($form, new Session());
            
            //get last Session just recorded in db:
            $session = $this->repositorySession->findOneBy([], ['id' => 'desc']);             
        }
        //if exists:
        else
        {
            //get session that exist, same or another one
            $session = $session[0];
            $this->setNewSession($form,$session);
        }
           
        //set Candidat object:
        $candidat->setIdentification($form[0]);
         
        //add session object to candidat object:
        $candidat->addSession($session);

        $this->entityManager->persist($candidat);
        $this->entityManager->flush(); //enregistrement dans l'entity Candidat        
    }*/


    /**
     * get values session from form
     */
    public function getSessionForm()
    {
        $array = []; 
        array_push($array, $this->form->get('identifiant')->getViewData());
        array_push($array, $this->form->get('date_debut')->getViewData());
        array_push($array, $this->form->get('date_fin')->getViewData());
        array_push($array, $this->form->get('nombre_de_jours')->getViewData());
        array_push($array, $this->form->get('responsable')->getViewData());
        array_push($array, $this->form->get('telephone')->getViewData());
        array_push($array, $this->form->get('site_de_session')->getViewData());
        array_push($array, $this->form->get('adresse')->getViewData());
        array_push($array, $this->form->get('code_postal')->getViewData());
        array_push($array, $this->form->get('ville')->getViewData());
        array_push($array, $this->form->get('session')->getViewData());
        return $array;
    }

    /**
     * get values candidat from form
     */
    public function getCandidatForm()
    {
        $array = [];        
        array_push($array, $this->form->get('identification')->getViewData());
        return $array;
    }

    /**
     * get values entreprise from form
     */
    public function getEntrepriseForm()
    {        
        $array = [];        
        array_push($array, $this->form->get('raison_sociale')->getViewData()); 
        array_push($array, $this->form->get('adresse_entreprise')->getViewData()); 
        array_push($array, $this->form->get('code_postal_entreprise')->getViewData()); 
        array_push($array, $this->form->get('ville_entreprise')->getViewData());
        array_push($array, $this->form->get('telephone_entreprise')->getViewData());    
        return $array;
    }

    /**
     * get values responsable_entreprise from form
     */
    public function getResponsableEntrepriseForm()
    {        
        $array = [];
        array_push($array, $this->form->get('nom_responsable_entreprise')->getViewData()); 
        array_push($array, $this->form->get('prenom_responsable_entreprise')->getViewData()); 
        array_push($array, $this->form->get('fonction_responsable_entreprise')->getViewData()); 
        array_push($array, $this->form->get('tel_fixe_responsable_entreprise')->getViewData());
        array_push($array, $this->form->get('tel_mob_responsable_entreprise')->getViewData());    
        return $array;
    }

    /**
     * get values jury from form
     */
    public function getJuryForm()
    {        
        $array = [];
        array_push($array, $this->form->get('nom_jury_1')->getViewData()); 
        array_push($array, $this->form->get('prenom_jury_1')->getViewData()); 
        array_push($array, $this->form->get('nom_jury_2')->getViewData()); 
        array_push($array, $this->form->get('prenom_jury_2')->getViewData());        
        array_push($array, $this->form->get('nom_jury_3')->getViewData()); 
        array_push($array, $this->form->get('prenom_jury_3')->getViewData());
        return $array;
    }

    /**
     * get values titre from form
     */
    public function getTitreForm()
    {        
        $array = [];
        array_push($array, $this->form->get('libelle_court')->getViewData()); 
        array_push($array, $this->form->get('libelle_long')->getViewData()); 
        array_push($array, $this->form->get('referentiel_libelle')->getViewData()); 
        array_push($array, $this->form->get('referentiel_document')->getViewData());        
        array_push($array, $this->form->get('referentiel_date_debut')->getViewData()); 
        array_push($array, $this->form->get('referentiel_date_fin')->getViewData());
        return $array;
    }

    /**
     * get values ccp from form
     */
    public function getCcpForm()
    {        
        $array = [];
        array_push($array, $this->form->get('code_ccp')->getViewData()); 
        array_push($array, $this->form->get('libelle_ccp')->getViewData()); 
        return $array;
    }

    public function getNiveauForm()
    {        
        $array = [];
        array_push($array, $this->form->get('code_niveau')->getViewData()); 
        array_push($array, $this->form->get('libelle_niveau')->getViewData()); 
        return $array;
    }

    /**
     * get values utilisateur from form
     */
    public function getUtilisateurForm()
    {        
        $array = [];
        array_push($array, $this->form->get('insee')->getViewData()); 
        array_push($array, $this->form->get('nom_utilisateur')->getViewData()); 
        array_push($array, $this->form->get('prenom_utilisateur')->getViewData()); 
        array_push($array, $this->form->get('adresse_utilisateur')->getViewData()); 
        array_push($array, $this->form->get('code_postal_utilisateur')->getViewData());
        array_push($array, $this->form->get('ville_utilisateur')->getViewData());
        array_push($array, $this->form->get('tel_mob_utilisateur')->getViewData());  
        
        array_push($array, $this->form->get('insee2')->getViewData()); 
        array_push($array, $this->form->get('nom_utilisateur2')->getViewData()); 
        array_push($array, $this->form->get('prenom_utilisateur2')->getViewData()); 
        array_push($array, $this->form->get('adresse_utilisateur2')->getViewData()); 
        array_push($array, $this->form->get('code_postal_utilisateur2')->getViewData());
        array_push($array, $this->form->get('ville_utilisateur2')->getViewData());
        array_push($array, $this->form->get('tel_mob_utilisateur2')->getViewData());  

        array_push($array, $this->form->get('insee3')->getViewData()); 
        array_push($array, $this->form->get('nom_utilisateur3')->getViewData()); 
        array_push($array, $this->form->get('prenom_utilisateur3')->getViewData()); 
        array_push($array, $this->form->get('adresse_utilisateur3')->getViewData()); 
        array_push($array, $this->form->get('code_postal_utilisateur3')->getViewData());
        array_push($array, $this->form->get('ville_utilisateur3')->getViewData());
        array_push($array, $this->form->get('tel_mob_utilisateur3')->getViewData());  
        return $array;
    }

    /**
     * get values habilitation from form
     */
    public function getHabilitationForm()
    {        
        $array = [];
        array_push($array, $this->form->get('titre_habilitation')->getViewData()); 
        array_push($array, $this->form->get('date_debut_habilitation')->getViewData()); 
        array_push($array, $this->form->get('date_fin_habilitation')->getViewData());             
        return $array;
    }

    /**
     * get values projet from form
     */
    public function getProjetForm()
    {        
        $array = [];
        array_push($array, $this->form->get('nom_projet')->getViewData()); 
        array_push($array, $this->form->get('commentaires')->getViewData()); 
           
        return $array;
    }

    /**
     * get values projet from form
     */
    public function getProduitForm()
    {        
        $array = [];
        array_push($array, $this->form->get('nom_produit')->getViewData()); 
        array_push($array, $this->form->get('domaine')->getViewData()); 
           
        return $array;
    }

    /**
     * get values Jour from form
     */
    public function getJourForm()
    {        
        $array = [];
        array_push($array, $this->form->get('date_jour')->getViewData());
        return $array;
    }

    

    /**
     * clean form
     */
    public function cleanForm()
    {  
        $this->form                   = $this->createForm(AppType::class);        
        return parent::redirectToRoute('app');
    }
    
}
