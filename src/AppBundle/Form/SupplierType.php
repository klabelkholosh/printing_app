<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SupplierType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('suppliercode', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter supplier code')))
        ->add('suppliername', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter supplier name')))
        ->add('addressnumber', EntityType::class, 
              array('class' =>'AppBundle:Address', 'choice_label'=>'addressnumber', 'multiple'=>true));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Supplier'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_supplier';
    }


}
