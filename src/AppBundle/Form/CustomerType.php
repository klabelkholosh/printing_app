<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CustomerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('customercode', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
        ->add('name', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
        ->add('status',ChoiceType::class, array('choices'=>array('Prospect'=>'P', 'Active'=>'A', 'Held'=>'H', 'Inactive'=>'I'), 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
        ->add('loginemail', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
        ->add('password', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Customer'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_customer';
    }


}
