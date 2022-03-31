<?php

namespace App\Controller\Admin;

use App\Entity\ResponsableEntreprise;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ResponsableEntrepriseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ResponsableEntreprise::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
