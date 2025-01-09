<?php

namespace App\Form;

use App\Entity\Certificate;
use App\Entity\Courses;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CertificateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('certificateCode')
            ->add('issuedAt')
            ->add('user', EntityType::class, [
                'class' => Users::class,
'choice_label' => 'id',
            ])
            ->add('course', EntityType::class, [
                'class' => Courses::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Certificate::class,
        ]);
    }
}
