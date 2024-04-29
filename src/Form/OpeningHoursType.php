<?php

namespace App\Form;

use App\Entity\OpeningHours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpeningHoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add("openingMonday", OpeningHours::class, ['widget' => 'single_text', "label" => "Ouverture Lundi Matin", "required" => true])
            ->add("closingMonday", OpeningHours::class, ['widget' => 'single_text', "label" => "Jusqu'à", "required" => true])
            ->add("openingTuesday", OpeningHours::class, ['widget' => 'single_text', "label" => "Ouverture Lundi Après Midi", "required" => true])
            ->add("closingTuesday", OpeningHours::class, ['widget' => 'single_text', "label" => " Jusqu'à", "required" => true])
            ->add("openingWednesday", OpeningHours::class, ['widget' => 'single_text', "label" => "Mardi Matin", "required" => true])
            ->add("closingWednesday", OpeningHours::class, ['widget' => 'single_text', "label" => "Jusqu'à", "required" => true])
            ->add("openingThursday", OpeningHours::class, ['widget' => 'single_text', "label" => "Mardi Après Midi", "required" => true])
            ->add("closingThursday", OpeningHours::class, ['widget' => 'single_text', "label" => "Jusqu'à", "required" => true])
            ->add("openingFriday", OpeningHours::class, ['widget' => 'single_text', "label" => "Mercredi Matin", "required" => true])
            ->add("closingFriday", OpeningHours::class, ['widget' => 'single_text', "label" => "Jusqu'à", "required" => true])
            ->add("openingSaturday", OpeningHours::class, ['widget' => 'single_text', "label" => "Mercredi Après Midi", "required" => true])
            ->add("closingSaturday", OpeningHours::class, ['widget' => 'single_text', "label" => "Jusqu'à", "required" => true])
            ->add("openingSunday", OpeningHours::class, ['widget' => 'single_text', "label" => "Jeudi Matin", "required" => true])
            ->add("closingSunday", OpeningHours::class, ['widget' => 'single_text', "label" => "Jusqu'à", "required" => true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OpeningHours::class,
            'csrf_protection' => true,
            // the name of the hidden HTML field that stores the token
            'csrf_field_name' => '_token',
            // an arbitrary string used to generate the value of the token
            // using a different string for each form improves its security
            'csrf_token_id'   => 'TimeTable_item',
        ]);
    }
}
