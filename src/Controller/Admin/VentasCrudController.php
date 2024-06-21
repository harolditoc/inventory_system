<?php

namespace App\Controller\Admin;

use App\Entity\Ventas;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class VentasCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ventas::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            DateTimeField::new('fecha'),
            AssociationField::new('cliente_id', 'Cliente'),
            IntegerField::new('Total'),
        ];
    }
    
}