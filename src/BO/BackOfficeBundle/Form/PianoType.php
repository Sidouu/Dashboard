<?php

namespace BO\BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PianoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('brand')
            ->add('model')
            ->add('number')
            ->add('repairPrice')
            ->add('steelStrings')
            ->add('spunStrings')
            ->add('stringDate')
            ->add('stringPrice')
            ->add('quoteDate')
            ->add('repairDate')
            ->add('price')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BO\BackOfficeBundle\Entity\Piano'
        ));
    }

    public function getName()
    {
        return 'bo_backofficebundle_pianotype';
    }
}
