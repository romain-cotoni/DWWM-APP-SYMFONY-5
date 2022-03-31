<?php

namespace App\Controller\Admin;

use App\Entity\ContentEntity;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ContentEntityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ContentEntity::class;
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
