<?php

namespace BO\BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BillType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('billNumber')
            ->add('content')
            ->add('price')
            ->add('customer')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BO\BackOfficeBundle\Entity\Bill'
        ));
    }

    public function getName()
    {
        return 'bo_backofficebundle_billtype';
    }
}
