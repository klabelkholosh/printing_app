<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PurchaseorderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('daterequired', DateType::class, ['widget' => 'single_text'])
        ->add('suppliercode', EntityType::class, 
            array('class'=>'AppBundle:Supplier',
                   'choice_label'=>'suppliercode'))
        ->add('materialcode', EntityType::class, 
            array('class'=>'AppBundle:Material',
                'choice_label'=>'materialcode'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Purchaseorder'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_purchaseorder';
    }


}
