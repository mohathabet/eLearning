<?php

namespace App\Form;

use App\Entity\Courses;
use App\Entity\Lessons;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
  // Add this use statement at the top


class LessonsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('course', EntityType::class, [
                'class' => Courses::class,
                'choice_label' => 'title'
            ])
            ->add('title')
            ->add('content', FileType::class, [
                'label' => 'Upload PDF',
                'mapped' => false, // We don't map the file to a property, it will be handled manually in the controller
                'required' => false, // Make it optional, depending on your needs
                'constraints' => [
                    // You can add file constraints, e.g., maximum file size or specific file types
                    new \Symfony\Component\Validator\Constraints\File([
                        'maxSize' => '1000M', // Max file size (adjust as needed)
                        'mimeTypes' => ['application/pdf'], // Only PDF files allowed
                        'mimeTypesMessage' => 'Please upload a valid PDF file.',
                    ])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lessons::class,
        ]);
    }
}