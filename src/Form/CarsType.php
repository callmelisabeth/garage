<?php

namespace App\Form;

use App\Entity\Cars;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('brand', options: ['label' => 'Nom de la marques'])
            ->add('price', options: ['label' => 'Prix'])
            ->add('kilometers', options: ['label' => 'Nombres de kilomètres'])
            ->add(
                'image',
                CollectionType::class,
                ['label' => 'Photo', "entry_type" => ImageType::class, "allow_add" => true, "allow_delete" => true,]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cars::class,
        ]);
    }
}
