<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BilletterieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('visitDate', DateType::class, [
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'js-datepicker',
                    'readonly' => 'readonly'
                ],
                'html5' => false
            ])
            ->add('duree', ChoiceType::class, [
                'expanded' => true,
                'multiple' =>false,
                'choices' => [
                    'Journée' => 1,
                    'Demi-journée' => 0.5
                ]
            ])
            ->add('quantite', IntegerType::class)
            ->add('email', EmailType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }


}