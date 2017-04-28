<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class AddressType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('contact', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter contact number')))
          ->add('detail', TextareaType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter address details')))
          ->add('type', ChoiceType::class, array('choices'=>array('Delivery'=>'D', 'Invoice'=>'I', 'Statement'=>'S'), 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
          ->add('suppliercode', 
                EntityType::class, 
                array(
                'class' => 'AppBundle:Customer',
                'choice_label'=>'customercode',
                'multiple'=>true)
                );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Address'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_address';
    }


}
