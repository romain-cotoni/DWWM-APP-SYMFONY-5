<?php

namespace App\Controller;

use App\Entity\ContentEntity;
use App\Form\ContactType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, ManagerRegistry $doctrine, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $firstname = $form->get('firstname')->getViewData();
            $lastname  = $form->get('lastname')->getViewData();
            $email     = $form->get('email')->getViewData();
            $tel       = $form->get('tel')->getViewData();
            $msg       = $form->get('msg')->getViewData();
            $mail      = (new Email())
                        ->from($email)
                        ->to('romain.cotoni@gmail.com')
                        ->subject('Nouveau message sur la page contact')
                        ->html('<a href="'.$email.'">'.$email.'</a>'.'<br>'.
                                $firstname.'<br>'.
                                $lastname.'<br>'.
                                $tel.'<br>'.
                                $msg);

            $mailer->send($mail);
        }
        $repository = $doctrine->getManager()->getRepository(ContentEntity::class);
        return $this->render('contact/index.html.twig',
        [
            'form'             => $form->createView(),
            'pageName'         => "contact",
            'contactCat1Title' => $repository->findOneBy(['name' => 'contact-cat-1-title'])->getvalue(),
            'contactCat1Line1' => $repository->findOneBy(['name' => 'contact-cat-1-line-1'])->getvalue(),
            'contactCat1Line2' => $repository->findOneBy(['name' => 'contact-cat-1-line-2'])->getvalue(),
            'contactCat1Line3' => $repository->findOneBy(['name' => 'contact-cat-1-line-3'])->getvalue(),

            'contactCat2Title' => $repository->findOneBy(['name' => 'contact-cat-2-title'])->getvalue(), 
            'contactCat2Line1' => $repository->findOneBy(['name' => 'contact-cat-2-line-1'])->getvalue(),
            'contactCat2Line2' => $repository->findOneBy(['name' => 'contact-cat-2-line-2'])->getvalue(),
            'contactCat2Line3' => $repository->findOneBy(['name' => 'contact-cat-2-line-3'])->getvalue(),

            'contactCat3Title' => $repository->findOneBy(['name' => 'contact-cat-3-title'])->getvalue(), 
            'contactCat3Line1' => $repository->findOneBy(['name' => 'contact-cat-3-line-1'])->getvalue(),    
            'contactCat3Line2' => $repository->findOneBy(['name' => 'contact-cat-3-line-2'])->getvalue(),
            'contactCat3Line3' => $repository->findOneBy(['name' => 'contact-cat-3-line-3'])->getvalue(),
        ]);
        
    }
}
