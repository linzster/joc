<?php

namespace Test\PublicationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PoemsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('journal')
            ->add('pubyear')
            ->add('url')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Test\PublicationsBundle\Entity\Poems'
        ));
    }

    public function getName()
    {
        return 'test_publicationsbundle_poemstype';
    }
}
