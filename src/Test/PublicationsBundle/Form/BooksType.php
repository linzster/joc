<?php

namespace Test\PublicationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BooksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('pubyear')
            ->add('blurb')
            ->add('photurl')
            ->add('publisher')
            ->add('genre')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Test\PublicationsBundle\Entity\Books'
        ));
    }

    public function getName()
    {
        return 'test_publicationsbundle_bookstype';
    }
}
