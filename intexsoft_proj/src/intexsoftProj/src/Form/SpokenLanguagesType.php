<?php

namespace App\Form;

use App\Entity\SpokenLanguages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpokenLanguagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user_id')
            ->add('language_id')
            ->add('level_id')
            ->add('dateOfCreate')
            ->add('dateOfUpdate')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SpokenLanguages::class,
        ]);
    }
}
