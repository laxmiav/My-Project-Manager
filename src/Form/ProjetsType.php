<?php

namespace App\Form;

use App\Entity\Projets;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\User;

class ProjetsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class)
            ->add('Description',TextareaType :: class)
            ->add('Starting_date',DateType :: class, [
                'widget' =>  'single_text',
                
            ])
            ->add('Deadline_date',DateType :: class , [
                'widget' =>  'single_text',
                
            ])
            ->add('user',EntityType ::class ,[  
                'class' => User::class,
                
                'label' =>'Add TEAM or Select you as a owner',
                'choice_label' => 'email',
                'multiple'=>true,
                'expanded'=>true,
                
                
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Projets::class,
        ]);
    }
}
