<?php

namespace App\Form;

use App\Entity\TechnicalExperience;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TechnicalExperienceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category_id')
            ->add('skill_id')
            ->add('experienceTerm')
            ->add('level')
            ->add('lastYearUsed')
            ->add('dateOfCreate')
            ->add('dateOfUpdate')
            ->add('user_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TechnicalExperience::class,
        ]);
    }
}
