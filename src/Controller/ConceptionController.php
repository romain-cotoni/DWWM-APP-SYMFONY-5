<?php

namespace App\Controller;

use App\Entity\ContentEntity;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConceptionController extends AbstractController
{
    /**
     * @Route("/conception", name="conception")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getManager()->getRepository(ContentEntity::class);
        return $this->render('conception/index.html.twig', 
        [
            'pageName'            => 'conception',
            'conceptionCat1Title' => $repository->findOneBy(['name' => 'conception-cat-1-title'])->getvalue(),
            'conceptionCat1Para1' => $repository->findOneBy(['name' => 'conception-cat-1-para-1'])->gettext(),
            'conceptionCat1Para2' => $repository->findOneBy(['name' => 'conception-cat-1-para-2'])->gettext(),
        ]);
    }
}
