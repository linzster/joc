<?php

namespace Test\RecognitionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('title')
            ->add('author')
            ->add('blurb')
            ->add('link')
            ->add('genre', 'choice', array(
    'choices'   => array('Article' => 'Article', 'Interview' => 'Interview', 'Video' => 'Video', 'Web Page' => 'Web Page', 'Press Release' => 'Press Release', 'Book' => 'Book'),
    'required'  => false,
))
            ->add('dateCreated', 'date', array(
    'input'  => 'datetime',
    'widget' => 'choice',
    'years' => range(1985,2025),
))
            ->add('datePosted', 'date', array(
    'input'  => 'datetime',
    'widget' => 'choice',
    'years' => range(1985,2025),
));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Test\RecognitionBundle\Entity\Resource'
        ));
    }

    public function getName()
    {
        return 'test_recognitionbundle_resource';
    }
}
