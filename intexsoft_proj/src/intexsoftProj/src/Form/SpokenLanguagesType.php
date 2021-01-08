<?php

namespace App\Form;

use App\Entity\Languages;
use App\Entity\SpokenLanguages;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpokenLanguagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user_id',EntityType::class, ['label' => 'uid', 'class' => User::class, 'choice_label' => 'email'])
            ->add('language_id',EntityType::class, ['label' => 'lanuage', 'class' => Languages::class, 'choice_label' => 'title'])
            ->add('level_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SpokenLanguages::class,
        ]);
    }
}
