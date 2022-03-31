<?php

namespace App\Controller\Admin;

use App\Entity\Habilitation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HabilitationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Habilitation::class;
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
