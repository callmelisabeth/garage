<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Context\ExecutionContext;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add("username", TextType::class, 
        ["label" => "Nom d'Utilisateur", "required" => true,
        "constraints" => [
            new Length(["min"=> 5, "max" => 180, "minMessage"=>"Le nom d'utilisateur est inférieur à 5 caratères"]),
            new NotBlank(["message"=> "Le nom d'utilisateur ne peut pas être vide"])]
        ])

        ->add("password", PasswordType::class, ["label" => "Mot de passe", "required" => true, 
        "constraints" => [
            new NotBlank(["message"=> "Veuillez saisir un mot de passe"])]
        ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'csrf_field_name' => '_token',
            'csrf_token_id'   => 'user_item',
        ]);
    }
}
