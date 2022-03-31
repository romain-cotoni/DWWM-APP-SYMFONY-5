<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    { 
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Votre prénom',
                'attr'  => ['placeholder' => 'Saisissez votre prénom', 'class'=>'form-control'],
                'constraints' => new Length(30,1)
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Votre nom',
                'attr'  => ['placeholder' => 'Saisissez votre nom', 'class'=>'form-control'],
                'constraints' => new Length(30,1)
            ])
            ->add('email', EmailType::class, [
                'label' => 'Votre email',
                'attr'  => ['placeholder' => 'Saisissez votre email', 'class'=>'form-control'],
                'constraints' => new Length(30,5)
            ])            
            ->add('tel', TelType::class, [
                'label' => 'Votre téléphone',
                'attr'  => ['placeholder' => 'Saisissez votre téléphone', 'class'=>'form-control'],
                'constraints' => new Length(30,1)
            ])
            ->add('msg', TextareaType::class, [
                'label' => 'Votre message',
                'attr'  => ['placeholder' => 'Saisissez votre message', 
                            'class'       =>'form-control',
                            'style'       => 'width: 100%; height: 20vh',],
            ])
            ->add('submit', SubmitType::class,[
                'label' => 'Envoyer',
                'attr'  => ['class' => 'btn btn-primary']
            ])
            ->add('reset', ResetType::class,[
                'label' => 'Effacer',
                'attr'  => ['class' => 'btn btn-primary']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
