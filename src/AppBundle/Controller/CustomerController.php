<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use AppBundle\Entity\Custaddress;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CustomerController extends Controller
{

    /**
     * @Route("/Customer_Page/CustomerDetail/{customercode}", name="Details")
     */
    public function DetailAction($customercode)
    {

        // replace this example code with whatever you need
        $cust = $this->getDoctrine()
                       ->getRepository('AppBundle:Customer')
                       ->find($customercode);

        return $this->render('Printing_app_views/Customer_Details.html.twig', array('customers'=>$cust));
    }


     /**
     * @Route("/Customer_Page/Supplier_Page", name="Supplier")
     */
    public function SupplierAction()
    {
         $customers = $this->getDoctrine()
                       ->getRepository('AppBundle:Customer')
                       ->findAll();
        // replace this example code with whatever you need
        return $this->render('Printing_app_views/Supplier_Page.html.twig', array('customers'=>$customers));
    }
       

    /**
     * @Route("/Customer_Page/Customer_Page", name="Customer")
     */
    public function CustomerAction(Request $request)
    {
        
        // replace this example code with whatever you need
        $cust = new Customer();
        $form = $this->createFormBuilder($cust)
            
            ->add('customercode', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px','placeholder' => 'Customer Code'))) 
            ->add('name', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px','placeholder' => 'Customer Name')))
            ->add('status', ChoiceType::class, array('choices' => array('Prospect'=>'P', 'Active' => 'A', 'Held' => 'H', 'Inactive' => 'I'), 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))

            ->add('save', SubmitType::class, array('label'=>'Add Customer' ,'attr'=>array('class'=>'btn btn-primary', 'style'=>'margin-bottom:15px')))
            ->getForm();

            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid())
            {

                $customercode = $form['customercode']->getData();
                $name = $form['name']->getData();
                $status = $form['status']->getData();
                
                $cust->setCustomercode($customercode);
                $cust->setName($name);
                $cust->setStatus($status);

                $em = $this->getDoctrine()->getManager();
                $em->persist($cust);
                $em->flush();

                $this->addFlash('Customer has',' been add');

                return $this->redirectToRoute('Supplier');

            }

        return $this->render('Printing_app_views/Customer_Page.html.twig', array('form'=>$form->createView()));
    }

    /**
     * @Route("/Customer_Page/EditCustomer/{customercode}/", name="EditCustomer")
     */
    public function EditCustomerAction($customercode, Request $request)
    {
           $cust = $this->getDoctrine()
                       ->getRepository('AppBundle:Customer')
                       ->find($customercode);

            $cust->setCustomercode($cust->getCustomercode());
            //$cust->setName($cust->getName());
            //$cust->setStatus($cust->getStatus());            
           
        $form = $this->createFormBuilder($cust)
            
            ->add('customercode', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px'))) 
            ->add('name', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px','placeholder' => 'Customer Name')))
            ->add('status', ChoiceType::class, array('choices' => array('Prospect'=>'P', 'Active' => 'A', 'Held' => 'H', 'Inactive' => 'I'), 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))

            ->add('save', SubmitType::class, array('label'=>'Update Customer' ,'attr'=>array('class'=>'btn btn-primary', 'style'=>'margin-bottom:15px')))
            ->getForm();

            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid())
            {

                $customercode = $form['customercode']->getData();
                $name = $form['name']->getData();
                $status = $form['status']->getData();
                
                $em = $this->getDoctrine()->getManager();
                $cust = $em->getRepository('AppBundle:Customer')->find($customercode);

                $cust->setCustomercode($customercode);
                $cust->setName($name);
                $cust->setStatus($status);

               
               
                $em->flush();

                $this->addFlash('Customer has',' been updated');

                return $this->redirectToRoute('Supplier');

            }

        // replace this example code with whatever you need
        return $this->render('Printing_app_views/EditCustomer.html.twig', array('form'=>$form->createView()));
    }

    /**
     * @Route("/Customer_Page/DeleteCustomer/{customercode}", name="Delete")
     */
    public function DeleteAction($customercode)
    {

        $em = $this->getDoctrine()->getManager();
        $cust = $em->getRepository('AppBundle:Customer')->find($customercode);

        $em->remove($cust);
        $em->flush();

        $this->addFlash('Customer has',' been updated');
        return $this->redirectToRoute('Supplier');
    }
 
}
