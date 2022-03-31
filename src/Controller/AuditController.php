<?php

namespace App\Controller;

use App\Entity\ContentEntity;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuditController extends AbstractController
{
    /**
     * @Route("/audit", name="audit")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getManager()->getRepository(ContentEntity::class);
        return $this->render('audit/index.html.twig', 
        [
            'pageName'       => 'audit',
            'auditTextIntro' => $repository->findOneBy(['name' => 'audit-text-intro'])->gettext(),
            'auditCat1Title' => $repository->findOneBy(['name' => 'audit-cat-1-title'])->getvalue(),
            'auditCat1Para1' => $repository->findOneBy(['name' => 'audit-cat-1-para-1'])->gettext(),
            'auditCat1Para2' => $repository->findOneBy(['name' => 'audit-cat-1-para-2'])->gettext(),
        ]);
    }
}
