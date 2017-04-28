<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
//test
class MachineType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('machinecode', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter machine description')))
        ->add('description', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter machine description')))
        ->add('hourlyrate', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter hourly rate')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Machine'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_machine';
    }


}
