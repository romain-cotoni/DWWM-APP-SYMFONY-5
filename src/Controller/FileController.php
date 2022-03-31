<?php

namespace App\Controller;

use App\Form\UploadType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FileController extends AbstractController
{

    private $message;
    private $form;

    /**                                                                                   
     * @Route("/file", name="file")
     */
    public function index(Request $request): Response
    {
        $this->message = "";
        $this->form = $this->createForm(UploadType::class);
        $this->form->handleRequest($request);

        if($this->form->get('upload')->isClicked())
        {                  
            $this->copyFileToFolder();
        }

        if ($this->isGranted('ROLE_ADMIN')) 
        {  
            return $this->render('file/index.html.twig', [
                'pageName'    => 'FileController',
                'message'     => $this->message,
                'form'        => $this->form->createView(),
            ]);
        }
        else 
        {
            return $this->redirectToRoute('app_login');
        }
    }


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
        $this->message = "le fichier ".$filename." a été copié";
    }
}
