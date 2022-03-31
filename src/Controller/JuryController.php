<?php

namespace App\Controller;

use App\Entity\ContentEntity;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JuryController extends AbstractController
{
    /**
     * @Route("/jury", name="jury")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getManager()->getRepository(ContentEntity::class);
        return $this->render('jury/index.html.twig', 
        [
            'pageName'      => 'jury',
            
            'juryCat1Title' => $repository->findOneBy(['name' => 'jury-cat-1-title'])->getvalue(),
            'juryCat1Para1' => $repository->findOneBy(['name' => 'jury-cat-1-para-1'])->gettext(),
            'juryCat1Para2' => $repository->findOneBy(['name' => 'jury-cat-1-para-2'])->gettext(),
            'juryCat1Para3' => $repository->findOneBy(['name' => 'jury-cat-1-para-3'])->gettext(),

            'juryCat2Title' => $repository->findOneBy(['name' => 'jury-cat-2-title'])->getvalue(),
            'juryCat2Para1' => $repository->findOneBy(['name' => 'jury-cat-2-para-1'])->gettext(),
            'juryCat2Para2' => $repository->findOneBy(['name' => 'jury-cat-2-para-2'])->gettext(),
            'juryCat2Para3' => $repository->findOneBy(['name' => 'jury-cat-2-para-3'])->gettext(),

            'juryCat3Title' => $repository->findOneBy(['name' => 'jury-cat-3-title'])->getvalue(),
            'juryCat3Para1' => $repository->findOneBy(['name' => 'jury-cat-3-para-1'])->gettext(),
            'juryCat3Para2' => $repository->findOneBy(['name' => 'jury-cat-3-para-2'])->gettext(),
            'juryCat3Para3' => $repository->findOneBy(['name' => 'jury-cat-3-para-3'])->gettext(),

            'juryCat4Title' => $repository->findOneBy(['name' => 'jury-cat-4-title'])->getvalue(),
            'juryCat4Pdf1'  => $repository->findOneBy(['name' => 'jury-cat-4-pdf-1'])->getvalue(),
            'juryCat4Pdf2'  => $repository->findOneBy(['name' => 'jury-cat-4-pdf-2'])->getvalue(),
            'juryCat4Pdf3'  => $repository->findOneBy(['name' => 'jury-cat-4-pdf-3'])->getvalue(),
            'juryCat4Pdf4'  => $repository->findOneBy(['name' => 'jury-cat-4-pdf-4'])->getvalue(),
        ]);
    }
}
