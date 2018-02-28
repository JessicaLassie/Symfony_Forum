<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuthorType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class,
                ['label' => "Votre prénom",
                    'required' => true
                ]
            )
            ->add('name', TextType::class,
                ['label' => "Votre nom",
                    'required' => true
                ]
            )
            ->add('email', RepeatedType::class,
                ['type' => EmailType::class,
                    'first_options' => ['label' => "Votre email", 'required' => true],
                    'second_options' => ['label' => "Confirmation de votre email"],
                    'invalid_message' => "L'email et sa confirmation doivent être identiques"
                ]
            )
            ->add('plainPassword', RepeatedType::class,
                ['type' => PasswordType::class,
                    'first_options' => ['label' => "Votre mot de passe", 'required' => true],
                    'second_options' => ['label' => "Confirmation de votre mot de passe"],
                    'invalid_message' => "Le mot de passe et sa confirmation doivent être identiques"
                ]
            )
            ->add('submit', SubmitType::class,
                ['label' => "Valider",
                    'attr' => ['class' => "btn-primary"]
                ]
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Author'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_author';
    }


}
