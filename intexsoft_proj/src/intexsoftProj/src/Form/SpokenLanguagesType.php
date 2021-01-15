<?php

namespace App\Form;

use App\Entity\Languages;
use App\Entity\SpokenLanguages;
use App\Entity\User;
use Doctrine\DBAL\Types\IntegerType;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpokenLanguagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user',EntityType::class, ['label' => 'email', 'class' => User::class, 'choice_label' => 'email'])
            ->add('language',EntityType::class, ['label' => 'language', 'class' => Languages::class, 'choice_label' => 'title'])
            ->add('level_id', ChoiceType::class, [
                'choices' => [
                    'beginner' => '0',
                    'elementary' => '1',
                    'intermediate' => '2',
                    'upper intermediate' => '3',
                    'advanced' => '4',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SpokenLanguages::class,
        ]);
    }
}
