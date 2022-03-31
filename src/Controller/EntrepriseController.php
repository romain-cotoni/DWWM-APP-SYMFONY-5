<?php

namespace App\Controller;

use App\Entity\ContentEntity;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntrepriseController extends AbstractController
{
    /**
     * @Route("/entreprise", name="entreprise")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getManager()->getRepository(ContentEntity::class);        
        return $this->render('entreprise/index.html.twig', 
        [
            'pageName'              => "entreprise",
            'entrepriseCat1Title'   => $repository->findOneBy(['name' => 'entreprise-cat-1-title'])->getvalue(),
            'entrepriseCat1Para1'   => $repository->findOneBy(['name' => 'entreprise-cat-1-para-1'])->gettext(),
            'entrepriseCat2Title'   => $repository->findOneBy(['name' => 'entreprise-cat-2-title'])->getvalue(),
            'entrepriseCat2Para1'   => $repository->findOneBy(['name' => 'entreprise-cat-2-para-1'])->gettext(),
            'entrepriseCat3Title'   => $repository->findOneBy(['name' => 'entreprise-cat-3-title'])->getvalue(),
            'entrepriseCat3Para1'   => $repository->findOneBy(['name' => 'entreprise-cat-3-para-1'])->gettext(),
            'entrepriseCat4Title'   => $repository->findOneBy(['name' => 'entreprise-cat-4-title'])->getvalue(),
            'entrepriseCat41Title'  => $repository->findOneBy(['name' => 'entreprise-cat-4.1-title'])->getvalue(),
            'entrepriseCat41Para1'  => $repository->findOneBy(['name' => 'entreprise-cat-4.1-para-1'])->gettext(),
            'entrepriseCat42Title'  => $repository->findOneBy(['name' => 'entreprise-cat-4.2-title'])->getvalue(),
            'entrepriseCat42Para1'  => $repository->findOneBy(['name' => 'entreprise-cat-4.2-para-1'])->gettext(),
            'entrepriseCat43Title'  => $repository->findOneBy(['name' => 'entreprise-cat-4.3-title'])->getvalue(),
            'entrepriseCat43Para1'  => $repository->findOneBy(['name' => 'entreprise-cat-4.3-para-1'])->gettext(),
            'entrepriseCat44Title'  => $repository->findOneBy(['name' => 'entreprise-cat-4.4-title'])->getvalue(),
            'entrepriseCat44Para1'  => $repository->findOneBy(['name' => 'entreprise-cat-4.4-para-1'])->gettext(),
        ]);
    }
}
