<?php

namespace App\Form;

use App\Entity\PersonalData;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonalDataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateOfBirthday')
            ->add('MaritalStatus')
            ->add('Gender')
            ->add('phone')
            ->add('about')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PersonalData::class,
        ]);
    }
}
