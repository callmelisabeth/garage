<?php

namespace App\Form;

use App\Entity\Cars;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class CarsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'brand',
                TextType::class,
                options: [
                    'label' => 'Nom de la marques', "required" => true,
                    "constraints" => [
                        new Length(["min" => 1, "max" => 60, "minMessage" => "Le champ 'marque' ne peux pas être inférieur à 1 caratères", "maxMessage" => "Le champ 'marque' ne peux pas être supérieur à 60 caratères"]),
                        new NotBlank(["message" => "Le champ marque doit être remplit"])
                    ]
                ]
            )

            ->add(
                'price',
                NumberType::class,
                options: [
                    'label' => 'Prix', "required" => true,
                    "constraints" => [
                        new Length(["min" => 1, "max" => 60, "minMessage" => "Le champ 'price' ne peux pas être inférieur à 1 caratères", "maxMessage" => "Le champ 'pice' ne peux pas être supérieur à 60 caratères"]),
                        new NotBlank(["message" => "Le champ price doit être remplit"])
                    ]
                ]
            )
            ->add(
                'kilometers',
                NumberType::class,
                options: [
                    'label' => 'Nombres de kilomètres', "required" => true,
                    "constraints" => [
                        new Length(["min" => 1, "max" => 6, "minMessage" => "Le champ 'kilomètre' ne peux pas être inférieur à 1 caratères", "maxMessage" => "Le champ 'kilomètre' ne peux pas être supérieur à 60 caratères"]),
                        new NotBlank(["message" => "Le champ kilomètre doit être remplit"])
                    ]
                ]
            )
            ->add('date', NumberType::class, options: [
                'label' => 'Année en circulation', "required" => true,
                "constraints" => [
                    new Length(["min" => 4, "max" => 4, "minMessage" => "Le champ 'date' ne peux pas être inférieur à 4caratères", "maxMessage" => "Le champ 'kilomètre' ne peux pas être supérieur à 4 caratères"]),
                    new NotBlank(["message" => "Le champ kilomètre doit être remplit"])
                ]
            ])
            ->add(
                'content',
                TextType::class,
                options: [
                    'label' => 'Description', "required" => true,
                    "constraints" => [
                        new NotBlank(["message" => "Le champ marque doit être remplit"])
                    ]
                ]
            )
            ->add(
                'images',
                CollectionType::class,
                ['label' => 'Télecharger une image', "entry_type" => ImageType::class, "allow_add" => true, "allow_delete" => true,]
            )
            ->add('gallery', FileType::class, [
                'label' => 'Ajouter des images ',
                'multiple' => true,
                'mapped' => false,
                'required' => false,

            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cars::class,
            'csrf_field_name' => '_token',
            'csrf_token_id'   => 'car_item',
        ]);
    }
}
