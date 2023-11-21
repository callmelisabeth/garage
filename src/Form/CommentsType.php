<?php

namespace App\Form;

use App\Entity\Comments;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('feedback')
            ->add("author", TextType::class, ["label" => "Votre Nom", "required" => true])
            ->add("grade", ChoiceType::class, ['choices' => [
                '5/5' => '5',
                '4/5' => '4',
                '3/5' => '3',
                '2/5' => '2',
                '1/5' => '1',
            ], "label" => "Qu'avez-vous pensez de nos services ? ", "required" => true])
            -> add("title", TextType::class, ["label" => "Titre", "required" => true])
            -> add("content", TextareaType::class, ["label" => "Ajouter un commentaire", "required" => true])
            -> add('approved', HiddenType::class, [
                'data' => '0', ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comments::class,
        ]);
    }
}
