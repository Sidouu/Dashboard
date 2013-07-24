<?php

namespace BO\BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastName')
            ->add('firstName')
            ->add('nextVisit')
            ->add('tour')
            ->add('address')
            ->add('locality')
            ->add('postalCode')
            ->add('city')
            ->add('lastVisit')
            ->add('homePhone')
            ->add('workPhone')
            ->add('mobilePhone')
            ->add('email')
            ->add('job')
            ->add('notes', 'textarea', array('label' => 'Notes', 'required' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BO\BackOfficeBundle\Entity\Customer'
        ));
    }

    public function getName()
    {
        return 'bo_backofficebundle_customertype';
    }
}
