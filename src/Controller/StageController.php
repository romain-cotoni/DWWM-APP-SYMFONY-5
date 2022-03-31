<?php

namespace App\Controller;

use App\Entity\ContentEntity;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StageController extends AbstractController
{
    /**
     * @Route("/stage", name="stage")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getManager()->getRepository(ContentEntity::class);
        return $this->render('stage/index.html.twig', 
        [
            'pageName'       => 'stage',
            'stageTextIntro' => $repository->findOneBy(['name' => 'stage-text-intro'])->gettext(),
            'stageCat1Title' => $repository->findOneBy(['name' => 'stage-cat-1-title'])->getvalue(),
            'stageCat1Para1' => $repository->findOneBy(['name' => 'stage-cat-1-para-1'])->gettext(),
            'stageCat1Para2' => $repository->findOneBy(['name' => 'stage-cat-1-para-2'])->gettext(),
        ]);
    }
}
