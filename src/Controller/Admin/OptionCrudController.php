<?php

namespace App\Controller\Admin;

use App\Entity\Option;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Option::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('label'),
            ArrayField::new('property'),
        ];
    }
    
}
