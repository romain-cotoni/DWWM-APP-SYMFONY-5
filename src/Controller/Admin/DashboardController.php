<?php

namespace App\Controller\Admin;

use App\Entity\Candidat;
use App\Entity\Ccp;
use App\Entity\Competence;
use App\Entity\ContentEntity;
use App\Entity\Entreprise;
use App\Entity\Habilitation;
use App\Entity\Jour;
use App\Entity\Jury;
use App\Entity\Niveau;
use App\Entity\Produit;
use App\Entity\Projet;
use App\Entity\ResponsableEntreprise;
use App\Entity\Session;
use App\Entity\Titre;
use App\Entity\UserEntity;
use App\Entity\Utilisateur;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
    * @Route("/admin", name="admin")
    */
    public function index(): Response
    {
        $firstname = 'romain';
        $pageName  = 'dashboard';
        return $this->render('admin-dashboard/index.html.twig',
        [
            'firstname' => $firstname,
            'pageName'  => $pageName 
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Administration');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToUrl('Retour au site', 'fas fa-laptop-house' , '/');            

        yield MenuItem::section('App');
        yield MenuItem::linkToRoute('Application' , 'fas fa-tablet-alt' , 'app');
        yield MenuItem::linkToRoute('Téléverser'  , 'fas fa-tablet-alt' , 'file');

        yield MenuItem::section('Entity crud app');
        yield MenuItem::linkToCrud('Sessions'     , 'fas fa-database' , Session::class);

        yield MenuItem::linkToCrud('Jours'        , 'fas fa-database' , Jour::class);

        yield MenuItem::linkToCrud('Candidats'    , 'fas fa-database' , Candidat::class);        
        yield MenuItem::linkToCrud('Compétences'  , 'fas fa-database' , Competence::class);
        yield MenuItem::linkToCrud('Projets'      , 'fas fa-database' , Projet::class);
        yield MenuItem::linkToCrud('Produits'     , 'fas fa-database' , Produit::class);

        yield MenuItem::linkToCrud('Entreprises'  , 'fas fa-database' , Entreprise::class);
        yield MenuItem::linkToCrud('Responsables' , 'fas fa-database' , ResponsableEntreprise::class);

        yield MenuItem::linkToCrud('Jurys'        , 'fas fa-database' , Jury::class);
        yield MenuItem::linkToCrud('Utilisateurs' , 'fas fa-database' , Utilisateur::class);        

        yield MenuItem::linkToCrud('Titres'       , 'fas fa-database' , Titre::class);
        yield MenuItem::linkToCrud('Habilitations', 'fas fa-database' , Habilitation::class);
        yield MenuItem::linkToCrud('Ccp'          , 'fas fa-database' , Ccp::class);
        yield MenuItem::linkToCrud('Niveau'       , 'fas fa-database' , Niveau::class);

        yield MenuItem::section('Entity crud site');
        yield MenuItem::linkToCrud('Contenu'      , 'fas fa-database' , ContentEntity::class);
        yield MenuItem::linkToCrud('User login'   , 'fas fa-database' , UserEntity::class);
    }
}
