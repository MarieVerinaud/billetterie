<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VisiteurFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('pays', TextType::class)
            ->add('dateNaissance', DateType::class, [
                'format' => 'dd/MM/yyyy',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'js-datepicker',
                    'readonly' => 'readonly'
                ],
                'html5' => false
            ])
            ->add('tarifReduit', CheckboxType::class, array(
                'label' => 'Tarif Réduit',
                'required' => false,
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\FormsData\FormVisiteurData'
        ]);

    }
}
