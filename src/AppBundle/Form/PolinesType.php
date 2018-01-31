<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PolinesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder /*->add('quantity', TextType::class, 
                        array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter quantity')))
		        ->add('priceunit', TextType::class, 
                        array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter price unit')))
		        ->add('price', TextType::class, 
                        array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter price')))
                ->add('stkunitconv', TextType::class, 
                        array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter stock unit conv')))
               
                ->add('person', TextType::class, 
                        array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter person')))*/
                ->add('materialcode', EntityType::class, 
                        array('class'=>'AppBundle:Material', 'choice_label'=>'description','choice_value'=>'materialcode' , 'multiple'=>true,
                        'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')));
                    /*            ->add('ponumber', EntityType::class, 
                        array('class'=>'AppBundle:Purchaseorder', 'choice_label'=>'ponumber', 
                        'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
                         ->add('status', TextType::class, 
                        array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter status')))*/
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Polines'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_polines';
    }


}
