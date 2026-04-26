<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'placeholder' => 'John Doe',
                    'class' => 'form-input',
                ],
                'constraints' => [
                    new Assert\NotBlank(message: 'Veuillez entrer votre nom'),
                    new Assert\Length(
                        min: 2,
                        max: 100,
                        minMessage: 'Votre nom doit contenir au moins {{ limit }} caractères',
                    ),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Votre email',
                'attr' => [
                    'placeholder' => 'john@example.com',
                    'class' => 'form-input',
                ],
                'constraints' => [
                    new Assert\NotBlank(message: 'Veuillez entrer votre email'),
                    new Assert\Email(message: 'Veuillez entrer un email valide'),
                ],
            ])
            ->add('subject', TextType::class, [
                'label' => 'Sujet',
                'attr' => [
                    'placeholder' => 'Demande de collaboration',
                    'class' => 'form-input',
                ],
                'constraints' => [
                    new Assert\NotBlank(message: 'Veuillez entrer un sujet'),
                    new Assert\Length(
                        min: 5,
                        max: 200,
                    ),
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Votre message',
                'attr' => [
                    'placeholder' => 'Décrivez votre projet ou votre demande...',
                    'rows' => 6,
                    'class' => 'form-input',
                ],
                'constraints' => [
                    new Assert\NotBlank(message: 'Veuillez entrer un message'),
                    new Assert\Length(
                        min: 10,
                        max: 2000,
                        minMessage: 'Votre message doit contenir au moins {{ limit }} caractères',
                    ),
                ],
            ])
            ->add('consent', CheckboxType::class, [
                'label' => 'J\'accepte que mes données soient collectées et traitées conformément à la politique de confidentialité',
                'mapped' => false,
                'constraints' => [
                    new Assert\IsTrue(
                        message: 'Vous devez accepter le traitement de vos données personnelles pour continuer.',
                    ),
                ],
                'attr' => [
                    'class' => 'form-checkbox',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
