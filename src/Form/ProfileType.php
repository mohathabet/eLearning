<?php

namespace App\Form;

use App\Entity\Profile;
use App\Entity\Users;
use Doctrine\DBAL\Types\DateTimeImmutableType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File; // Correct import for File constraint


class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('image', FileType::class, [
            'label' => 'Your profile picture (jpeg, png)',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
                    'mimeTypes' => [
                        'image/jpeg',
                        'image/png',
                    ],
                    'mimeTypesMessage' => 'Please upload a valid JPEG or PNG image.',
                ])
            ],
        ])
            ->add('dateOfBirth', DateType::class, [
                'years' => range(date('Y') - 100, date('Y')), // Allow past 100 years
            ])

            ->add('country')
            ->add('address')
            ->add('submit', SubmitType::class, [
                'label' => 'Save profile'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Profile::class,
        ]);
    }
}