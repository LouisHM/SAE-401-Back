<?php

namespace App\Controller\Admin;

use App\Entity\Pants;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PantsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pants::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('category'),
            TextField::new('name'),
            TextEditorField::new('description'),
            NumberField::new('price'),
            TextField::new('img'),
            ArrayField::new('size'),
            ArrayField::new('color'),
        ];
    }
    
}
