<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class MaterialType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('materialcode', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter material code')))
            ->add('description', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter Material Description')))
            ->add('type', ChoiceType::class, array('choices'=>array('Sheet'=>'S', 'Reel'=>'R', 'Coating'=>'C', 'Sundry'=>'S'), 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
            ->add('stockunit', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter Stock Unit')))
            ->add('priceunit', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter Price Amount')))
            ->add('minimumstock', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter Minimum Stock Unit')))
            ->add('averageprice', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px', 'placeholder'=>'Enter avarage price')))
            ->add('status', ChoiceType::class, array('choices'=>array('Normal'=>'N', 'Consignment'=>'C', 'Low'=>'L', 'Deprecated'=>'D'), 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
;
           /* ->add('matgroup', EntityType::class, array(
                'class' => 'AppBundle:Matgroup',
                'choice_label'=>'description',

                'multiple'=>false, 
                'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')));*/
           
           
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Material'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_material';
    }


}
