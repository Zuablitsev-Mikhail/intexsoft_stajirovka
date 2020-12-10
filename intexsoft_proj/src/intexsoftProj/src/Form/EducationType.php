<?php

namespace App\Form;

use App\Entity\Education;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EducationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateStart')
            ->add('dateEnd')
            ->add('title')
            ->add('disciplines')
            ->add('result')
            ->add('dateOfCreate')
            ->add('dateOfUpdate')
            ->add('user_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Education::class,
        ]);
    }
}
