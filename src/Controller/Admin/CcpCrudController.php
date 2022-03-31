<?php

namespace App\Controller\Admin;

use App\Entity\Ccp;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CcpCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ccp::class;
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
