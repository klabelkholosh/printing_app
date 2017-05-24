<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\DBAL\Query\QueryBuilder;

class CustaddressType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('addressnumber', EntityType::class, array(
                            'class'=>'AppBundle:Address',
                            'choice_label' =>'detail','multiple'=>false, 
                            'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')));
          /* ->add('customercode', EntityType::class, array(
                            'class'=>'AppBundle:Customer',
                            'choice_label' =>'customercode',
                            'query_builder'=>function (EntityRepository $repo){
                                return $repo->createQueryBuilder('c')
                                            ->orderBy('customercode', 'ASC');
                            },
                            'multiple'=>false,
                            'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')));
           $tagsAsArray = $builder->get('customercode');
           dump($tagsAsArray);*/
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Custaddress'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_custaddress';
    }


}
