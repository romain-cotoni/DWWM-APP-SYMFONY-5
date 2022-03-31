<?php

namespace App\Controller\Admin;

use App\Entity\UserEntity;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserEntityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return UserEntity::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('email'),
            TextField::new('password'),
        ];
    }
}
