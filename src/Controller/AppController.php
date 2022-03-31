<?php

namespace App\Controller;

/*use App\Classes\CandidatClass;
use App\Classes\CcpClass;
use App\Classes\CompetenceClass;
use App\Classes\EntrepriseClass;
use App\Classes\HabilitationClass;
use App\Classes\JourClass;
use App\Classes\JuryClass;
use App\Classes\NiveauClass;
use App\Classes\ProduitClass;
use App\Classes\ProjetClass;
use App\Classes\SessionClass;
use App\Classes\TitreClass;
use App\Classes\UtilisateurClass;
use App\Classes\ResponsableEntrepriseClass;*/

use App\Classes\RecordClass;
use App\Classes\SearchClass;

use App\Entity\Candidat;
use App\Entity\Competence;
use App\Entity\Ccp;
use App\Entity\Jour;
use App\Entity\Habilitation;
use App\Entity\Jury;
use App\Entity\Session;
use App\Entity\Titre;
use App\Entity\Utilisateur;
use App\Form\UploadType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    private $entityManager;
    private $form;

    /**
     * @Route("/app", name="app")
     */
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {     
        $this->entityManager = $doctrine->getManager(); 
        $this->form          = $this->createForm(UploadType::class);
        $this->form->handleRequest($request);

        if($this->form->get('upload')->isClicked())
        {                  
            $this->copyFileToFolder();
        }

        if ($this->isGranted('ROLE_ADMIN')) 
        {         
            return $this->render('app/index.html.twig',[
                'pageName' => 'app',
                'form'     => $this->form->createView(),
            ]);
        }
        else 
        {
            return $this->redirectToRoute('app_login');
        }
    }

    /**                                                                                   
     * Copier un fichier dans le dossier pdf
     */
    function copyFileToFolder()
    {
        $this->message = "";
        $directory     = getcwd();                            //dossier roots
        $directory     = $directory.'/assets/pdf';            //dossier source
        $source        = $this->form->get('file')->getData(); //fichier à copier
        $filename      = $source->getClientOriginalName();
        $destination   = $directory.'/'.$filename;            //dossier destination + nom nouveau fichier
        $filesystem    = new Filesystem();
        $filesystem->copy($source, $destination, true);
        $this->form = $this->createForm(UploadType::class);
    }

    /**                                                                                   
     * @Route("/ajax_filtrer_sessions", name="ajax_filtrer_sessions")
     */
    public function ajaxFiltrerSessions(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest())
        { 
            $entityManager = $doctrine->getManager();
            $repository    = $entityManager->getRepository(Session::class);
            $debut         = $request->get('debut');
            $fin           = $request->get('fin');
            $titre         = $request->get('titre');
            if($titre != "selection titre") $sessions = $repository->findByDatesAndTitre($debut, $fin, $titre);
            else                            $sessions = $repository->findByDates($debut, $fin);
            if($sessions)
            { 
                $array = [];
                for($i=0; $i<count($sessions); $i++) array_push($array, $sessions[$i]->getIdentifiant());
                return new JsonResponse(array('data' => $array));
            }
            else return new JsonResponse(array('data' => "pas de résultat"));    
        }
        return new Response('probleme avec ajax', 400);
    }

    /**                                                                                   
     * @Route("/ajax_chercher_session", name="ajax_chercher_session")
     */
    public function ajaxChercherSession(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest())
        { 
            $identifiant   = $request->get('identifiant');
            $entityManager = $doctrine->getManager();
            $repository    = $entityManager->getRepository(Session::class);
            $session       = $repository->findBy(['identifiant' => $identifiant]);
            if($session && ($session=$session[0]))
            { 
                $search = new SearchClass();
                return new JsonResponse(array('data' => $search->searchBySession($session)));
            }
            else
                return new JsonResponse(array('data' => "pas de résultat"));    
        }
        return new Response('probleme avec ajax', 400);
    }

    /**                                                                                   
     * @Route("/ajax_associer_titre", name="ajax_associer_titre")
     */
    public function ajaxAssocierTitre(Request $request, ManagerRegistry $doctrine)
    {
        if($request->isXMLHttpRequest())
        { 
            $record   = new RecordClass($doctrine);
            $resultat = $record->associerTitreToSession($request->get('libelle'), $request->get('identifiant'));
            return new JsonResponse(array('data' => $resultat));
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_ajouter_jour", name="ajax_ajouter_jour")
     */
    public function ajaxAjouterJour(Request $request, ManagerRegistry $doctrine)
    {
        if($request->isXMLHttpRequest())
        { 
            $record = new RecordClass($doctrine);
            $record->recordJour($request->get('identifiant'), $request->get('input_jour'));
            return new JsonResponse(array('data' => 'jour enregistré'));
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_record_session", name="ajax_record_session")
     */
    public function ajaxRecordSession(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest())
        { 
            $record = new RecordClass($doctrine);
            $record->recordSession($request->get('form'));
            return new JsonResponse(array('data' => "session enregistrée"));
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_delete_session", name="ajax_delete_session")
     */
    public function ajaxDeleteSession(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
           
            return new JsonResponse(array('data' => "effacé"));    
        }
        return new Response('probleme ajax!', 400);
    }

     /**                                                                                   
     * @Route("/ajax_filtrer_candidats_by_session", name="ajax_filtrer_candidats_by_session")
     */
    public function ajaxFiltrerCandidatsBySession(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest())
        { 
            $entityManager = $doctrine->getManager();
            $repository    = $entityManager->getRepository(Candidat::class);
            $identifiant   = $request->get('identifiant');
            $candidats     = $repository->findBySession($identifiant);
            if($candidats)
            { 
                $array = [];
                for($i=0; $i<count($candidats); $i++) array_push($array, $candidats[$i]->getIdentification());
                return new JsonResponse(array('data' => $array));
            }
            else return new JsonResponse(array('data' => "pas de résultat"));
        }
        return new Response('probleme avec ajax', 400);
    }

    /**                                                                                   
     * @Route("/ajax_filtrer_candidats", name="ajax_filtrer_candidats")
     */
    public function ajaxFiltrerCandidats(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest())
        { 
            $entityManager = $doctrine->getManager();
            $repository    = $entityManager->getRepository(Candidat::class);
            $debut         = $request->get('debut');
            $fin           = $request->get('fin');
            $titre         = $request->get('titre');
            $session       = $request->get('session');
            
            if($session != "selection session")
                $candidats = $repository->findBySessionAndDates($debut, $fin, $session);
            elseif($titre != "selection titre")
                $candidats = $repository->findByTitreAndDates($debut, $fin, $titre);
            else                            
                $candidats = $repository->findByDates($debut, $fin);


            if($candidats)
            { 
                $array = [];
                for($i=0; $i<count($candidats); $i++) array_push($array, $candidats[$i]->getIdentification());
                return new JsonResponse(array('data' => $array));
            }
            else return new JsonResponse(array('data' => "pas de résultat"));    
        }
        return new Response('probleme avec ajax', 400);
    }

    /**                                                                                   
     * @Route("/ajax_chercher_candidat", name="ajax_chercher_candidat")
     */
    public function ajaxChercherCandidat(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $identification = $request->get('identification');
            $entityManager  = $doctrine->getManager();
            $repository     = $entityManager->getRepository(Candidat::class);            
            $candidat       = $repository->findBy(['identification' => $identification]);
            if($candidat && ($candidat = $candidat[0]))
            { 
                $search = new SearchClass();
                return new JsonResponse(array('data' => $search->searchByCandidat($candidat)));
            }
            else
                return new JsonResponse(array('data' => "pas de résultat"));    
        }
        return new Response('probleme avec ajax', 400);
    }

    /**                                                                                   
     * @Route("/ajax_associer_session", name="ajax_associer_session")
     */
    public function ajaxAssocierSession(Request $request, ManagerRegistry $doctrine)
    {
        if($request->isXMLHttpRequest())
        { 
            $record   = new RecordClass($doctrine);
            $resultat = $record->associerSessionToCandidat($request->get('identifiant'),    
                                                           $request->get('selectIdentifiant'), 
                                                           $request->get('identification'));
            return new JsonResponse(array('data' => $resultat));
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_ajouter_select_competence", name="ajax_ajouter_select_competence")
     */
    public function ajaxAjouterSelectCompetence(Request $request, ManagerRegistry $doctrine)
    {
        if($request->isXMLHttpRequest())
        { 
            $record   = new RecordClass($doctrine);
            $resultat = $record->recordSelectCompetence($request->get('identification'), $request->get('description'));
            return new JsonResponse(array('data' => $resultat));
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_ajouter_competence", name="ajax_ajouter_competence")
     */
    public function ajaxAjouterCompetence(Request $request, ManagerRegistry $doctrine)
    {
        if($request->isXMLHttpRequest())
        { 
            $record   = new RecordClass($doctrine);
            $record->recordCompetence($request->get('form'));
            return new JsonResponse(array('data' => 'competence enregistrée'));
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_retirer_competence", name="ajax_retirer_competence")
     */
    public function ajaxRetirerCompetence(Request $request, ManagerRegistry $doctrine)
    {

    }

    /**                                                                                   
     * @Route("/ajax_record_candidat", name="ajax_record_candidat")
     */
    public function ajaxRecordCandidat(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $Candidat = new RecordClass($doctrine);
            $Candidat->recordCandidat($request->get('form'));
            return new JsonResponse(array('data' => "candidat enregistré"));    
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_delete_candidat", name="ajax_delete_candidat")
     */
    public function ajaxDeleteCandidat(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            return new JsonResponse(array('data' => "effacé"));
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_chercher_titre", name="ajax_chercher_titre")
     */
    public function ajaxChercherTitre(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $libelle       = $request->get('libelle');
            $entityManager = $doctrine->getManager();
            $repository    = $entityManager->getRepository(Titre::class);            
            $titre         = $repository->findBy(['libelle_court' => $libelle]);
            if($titre  && ($titre = $titre[0]))
            { 
                $search = new SearchClass();
                return new JsonResponse(array('data' => $search->searchByTitre($titre)));
            }
            else
                return new JsonResponse(array('data' => "pas de résultat"));    
        }
        return new Response('probleme avec ajax', 400);
    }

    /**                                                                                   
     * @Route("/ajax_ajouter_select_ccp", name="ajax_ajouter_select_ccp")
     */
    public function ajaxAjouterSelectCcp(Request $request, ManagerRegistry $doctrine)
    {
        if($request->isXMLHttpRequest())
        { 
            $record   = new RecordClass($doctrine);
            $resultat = $record->recordSelectCcp($request->get('libelle_titre'), $request->get('libelle_ccp'));
            return new JsonResponse(array('data' => $resultat));
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_ajouter_ccp", name="ajax_ajouter_ccp")
     */
    public function ajaxAjouterCcp(Request $request, ManagerRegistry $doctrine)
    {
        if($request->isXMLHttpRequest())
        { 
            $record = new RecordClass($doctrine);
            $record->recordCcp($request->get('form'));
            return new JsonResponse(array('data' => 'ccp enregistré'));
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_retirer_ccp", name="ajax_retirer_ccp")
     */
    public function ajaxRetirerCcp(Request $request, ManagerRegistry $doctrine)
    {

    }

    /**                                                                                   
     * @Route("/ajax_ajouter_select_habilitation", name="ajax_ajouter_select_habilitation")
     */
    public function ajaxAjouterSelectHabilitation(Request $request, ManagerRegistry $doctrine)
    {
        if($request->isXMLHttpRequest())
        { 
            $record   = new RecordClass($doctrine);
            $resultat = $record->recordSelectHabilitation($request->get('libelle_court'), $request->get('titre_habilitation'));
            return new JsonResponse(array('data' => $resultat));
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_ajouter_habilitation", name="ajax_ajouter_habilitation")
     */
    public function ajaxAjouterHabilitation(Request $request, ManagerRegistry $doctrine)
    {
        if($request->isXMLHttpRequest())
        { 
            $record   = new RecordClass($doctrine);
            $record->recordHabilitation($request->get('form'));
            return new JsonResponse(array('data' => 'habilitation enregistré'));
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_retirer_habilitation", name="ajax_retirer_habilitation")
     */
    public function ajaxRetirerHabilitation(Request $request, ManagerRegistry $doctrine)
    {

    }

    /**                          
     * @Route("/ajax_record_titre", name="ajax_record_titre")
     */
    public function ajaxRecordTitre(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest())
        { 
            $titre = new RecordClass($doctrine);
            $titre->recordTitre($request->get('form'));
            return new JsonResponse(array('data' => "titre enregistré")); 
        }
        return new Response('probleme ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_delete_titre", name="ajax_delete_titre")
     */
    public function ajaxDeleteTitre(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            return new JsonResponse(array('data' => "effacé"));    
        }
        return new Response('probleme ajax!', 400);
    }


    /**                                                                                   
     * @Route("/ajax_fill_select_session", name="ajax_fill_select_session")
     */
    public function ajaxfillSelectSession(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $entityManager     = $doctrine->getManager();
            $repositorySession = $entityManager->getRepository(Session::class);            
            $sessions          = $repositorySession->findAll();
            $array = [];
            for($i = 0; $i < count($sessions); $i++)
            { 
                array_push($array, $sessions[$i]->getIdentifiant());
            }   
            return new JsonResponse(array('data' => $array));    
        }
        return new Response('This is not ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_fill_select_jour", name="ajax_fill_select_jour")
     */
    public function ajaxfillSelectJour(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $entityManager     = $doctrine->getManager();
            $repositorySession = $entityManager->getRepository(Session::class);
            $repositoryJour    = $entityManager->getRepository(Jour::class);
            $sessions          = $repositorySession->findBy(['identifiant' => $request->get('identifiant')]);
            $jours             = $repositoryJour->findBySessions($sessions[0]->getId());
            $array = [];
            for($i = 0; $i < count($jours); $i++)
            { 
                array_push($array, $jours[$i]->getdateJour());
            }   
            return new JsonResponse(array('data' => $array));    
        }
        return new Response('This is not ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_fill_select_candidat", name="ajax_fill_select_candidat")
     */
    public function ajaxfillSelectCandidat(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $entityManager      = $doctrine->getManager();
            $repositoryCandidat = $entityManager->getRepository(Candidat::class);            
            $candidats          = $repositoryCandidat->findAll();
            $array = [];
            for($i = 0; $i < count($candidats); $i++)
            { 
                array_push($array, $candidats[$i]->getIdentification());
            }   
            return new JsonResponse(array('data' => $array));    
        }
        return new Response('This is not ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_fill_select_titre", name="ajax_fill_select_titre")
     */
    public function ajaxfillSelectTitre(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $entityManager   = $doctrine->getManager();
            $repositoryTitre = $entityManager->getRepository(Titre::class);            
            $titres          = $repositoryTitre->findAll();
            $array = [];
            for($i = 0; $i < count($titres); $i++)
            { 
                array_push($array, $titres[$i]->getLibelleCourt());
            }   
            return new JsonResponse(array('data' => $array));    
        }
        return new Response('This is not ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_fill_select_competence", name="ajax_fill_select_competence")
     */
    public function ajaxfillSelectCompetence(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $entityManager        = $doctrine->getManager();
            $repositoryCompetence = $entityManager->getRepository(Competence::class);            
            $competences          = $repositoryCompetence->findAll();
            $array = [];
            for($i = 0; $i < count($competences); $i++)
            { 
                array_push($array, $competences[$i]->getDescription());
            }   
            return new JsonResponse(array('data' => $array));    
        }
        return new Response('This is not ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_fill_select_ccp", name="ajax_fill_select_ccp")
     */
    public function ajaxfillSelectCcp(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $entityManager = $doctrine->getManager();
            $repositoryCcp = $entityManager->getRepository(Ccp::class);            
            $ccps          = $repositoryCcp->findAll();
            $array         = [];
            for($i = 0; $i<count($ccps); $i++)
            { 
                array_push($array, $ccps[$i]->getLibelleCcp());
            }   
            return new JsonResponse(array('data' => $array));    
        }
        return new Response('This is not ajax!', 400);
    }

    /**                                                                                   
     * @Route("/ajax_fill_select_habilitation", name="ajax_fill_select_habilitation")
     */
    public function ajaxfillSelectHabilitation(Request $request, ManagerRegistry $doctrine)
    {
        if ($request->isXMLHttpRequest()) 
        { 
            $entityManager          = $doctrine->getManager();
            $repositoryHabilitation = $entityManager->getRepository(Habilitation::class);            
            $habilitations          = $repositoryHabilitation->findAll();
            $array                  = [];
            for($i = 0; $i<count($habilitations); $i++)
            { 
                array_push($array, $habilitations[$i]->getTitreHabilitation());
            }   
            return new JsonResponse(array('data' => $array));    
        }
        return new Response('This is not ajax!', 400);
    }

    function searchByCandidat($candidat)
    {
        $array = [];
        if($candidat = $candidat[0]) //if Candidat exists
        {
            array_push($array, $candidat->getIdentification());
        }
        else
            $candidat = null;

        if($candidat)
        {
            if($session = $candidat->getSession()[0]) //if Session exists
            {
                array_push($array, $session->getIdentifiant()); //indice 1
                array_push($array, $session->getDateDebut());
                array_push($array, $session->getDateFin());
                array_push($array, $session->getNbJours());
                array_push($array, $session->getResponsable());
                array_push($array, $session->getTelephone());
                array_push($array, $session->getSiteSession());
                array_push($array, $session->getAdresse());
                array_push($array, $session->getCodePostal());
                array_push($array, $session->getVille());
            }
        }

        if($session)
        {
            if($entreprise = $session->getEntrepriseId()) //if entreprise exists
            {
                array_push($array, $entreprise->getRaisonSociale()); //indice 11
                array_push($array, $entreprise->getAdresseEntreprise());
                array_push($array, $entreprise->getCodePostalEntreprise());
                array_push($array, $entreprise->getVilleEntreprise());
                array_push($array, $entreprise->getTelephoneEntreprise());
            }
        }
        return $array;
    }   
}