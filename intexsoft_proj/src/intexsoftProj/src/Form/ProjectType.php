<?php

namespace App\Form;

use App\Entity\Project;
use App\Entity\ProjectRoles;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('internal_title')
            ->add('external_title')
            ->add('period_start')
            ->add('period_end')
            ->add('description')
            ->add('technologies')
            ->add('role_id',EntityType::class, ['label' => 'Роль', 'class' => ProjectRoles::class, 'choice_label' => 'title'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
