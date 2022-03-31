<?php

namespace App\Controller\Admin;

use App\Entity\Jour;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class JourCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Jour::class;
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
