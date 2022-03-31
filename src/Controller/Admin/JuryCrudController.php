<?php

namespace App\Controller\Admin;

use App\Entity\Jury;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class JuryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Jury::class;
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
