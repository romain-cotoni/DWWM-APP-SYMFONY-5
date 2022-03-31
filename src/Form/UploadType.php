<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class UploadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('file'  , FileType::class, [
              'attr'  => ['class'=>'form-control'],
        ])
        ->add('upload', SubmitType::class, [
              'label' => 'Charger',
              'attr'  => ['style' => 'width: 100%', 'class'=>'btn btn-primary'],
        ]);
    }
}
