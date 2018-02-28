<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class,
                ['label' => "Titre"]
            )
            ->add('text', TextareaType::class,
                ['label' => "Texte", 'attr' => ['rows' => "5"], 'required' => true]
            )
            ->add('image', FileType::class,
                ['label' => 'Image', 'required' => false, 'data_class' => 'Symfony\Component\HttpFoundation\File\File', 'property_path' => 'image']
            )
            //->add('createdAt', DateType::class,
            //    ['label' => "Date de publication", 'widget' => 'single_text']
            //)
            //->add('author', EntityType::class,
            //    ['class' => "AppBundle\Entity\Author", 'placeholder' => "Choisissez un auteur", 'choice_label' => "fullName"]
            //)
            //->add('theme')
            ->add('submit', SubmitType::class,
                ['label' => "Valider", 'attr' => ['class' => "btn-primary"]]
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Post'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_post';
    }


}
