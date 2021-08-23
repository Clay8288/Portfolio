<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add('fullName',TextType::class, [
        'label' => 'Votre Nom : ',
        'row_attr' => [
            'class' => 'form',
        ],
        'attr' => array(
            'placeholder' => 'Nom'
        )
    ])
    ->add('email',EmailType::class, [
        'label' => 'Votre Email : ',
        'row_attr' => [
            'class' => 'form'
        ],
        'attr' => array(
            'placeholder' => 'Email'
        )
    ])
    ->add('message', TextareaType::class, [
        'label' => 'Votre Message : ',        
        'row_attr' => [
            'class' => 'form'
        ],
        'attr' => array(
            'placeholder' => 'Message'
        )
    ])
;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
