<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class editCustomerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
        ->add('name', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'trim'=>true)))
        ->add('status',ChoiceType::class, array('choices'=>array('Prospect'=>'P', 'Active'=>'A', 'Held'=>'H', 'Inactive'=>'I'), 
            'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
        ->add('loginemail', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'trim'=>true)))
        ->add('password', PasswordType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'trim'=>true)));
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