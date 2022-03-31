<?php

namespace App\Controller;

use App\Entity\ContentEntity;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationController extends AbstractController
{
    /**
     * @Route("/formation", name="formation")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getManager()->getRepository(ContentEntity::class);
        return $this->render('formation/index.html.twig', 
        [
            'pageName'           => 'formation',
            'formationCat1Title' => $repository->findOneBy(['name' => 'formation-cat-1-title'])->getvalue(),
            'formationCat1Line1' => $repository->findOneBy(['name' => 'formation-cat-1-line-1'])->gettext(),
            'formationCat1Line2' => $repository->findOneBy(['name' => 'formation-cat-1-line-2'])->gettext(),
            'formationCat1Line3' => $repository->findOneBy(['name' => 'formation-cat-1-line-3'])->gettext(),
            'formationCat2Title' => $repository->findOneBy(['name' => 'formation-cat-2-title'])->getvalue(),
            'formationCat2Line1' => $repository->findOneBy(['name' => 'formation-cat-2-line-1'])->gettext(),
            'formationCat2Line2' => $repository->findOneBy(['name' => 'formation-cat-2-line-2'])->gettext(),
            'formationCat2Line3' => $repository->findOneBy(['name' => 'formation-cat-2-line-3'])->gettext(),
            'formationCat3Title' => $repository->findOneBy(['name' => 'formation-cat-3-title'])->getvalue(),
            'formationCat3Line1' => $repository->findOneBy(['name' => 'formation-cat-3-line-1'])->gettext(),
            'formationCat3Line2' => $repository->findOneBy(['name' => 'formation-cat-3-line-2'])->gettext(),
            'formationCat3Line3' => $repository->findOneBy(['name' => 'formation-cat-3-line-3'])->gettext(),
            'formationCat4Title' => $repository->findOneBy(['name' => 'formation-cat-4-title'])->getvalue(),
            'formationCat4Line1' => $repository->findOneBy(['name' => 'formation-cat-4-line-1'])->gettext(),
            'formationCat4Line2' => $repository->findOneBy(['name' => 'formation-cat-4-line-2'])->gettext(),
            'formationCat4Line3' => $repository->findOneBy(['name' => 'formation-cat-4-line-3'])->gettext(),  
            'formationCat5Title' => $repository->findOneBy(['name' => 'formation-cat-5-title'])->getvalue(),
            'formationCat5Line1' => $repository->findOneBy(['name' => 'formation-cat-5-line-1'])->gettext(),
            'formationCat5Line2' => $repository->findOneBy(['name' => 'formation-cat-5-line-2'])->gettext(),
            'formationCat5Line3' => $repository->findOneBy(['name' => 'formation-cat-5-line-3'])->gettext(),
        ]);
    }
}
