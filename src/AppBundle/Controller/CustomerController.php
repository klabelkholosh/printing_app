<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage;

/**
 * Customer controller.
 *
 * @Route("customer")
 */
class CustomerController extends Controller
{
    /**
     * Lists all customer entities.
     *
     * @Route("/", name="customer_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //$dql = "SELECT c FROM AppBundle:Customer c";
        //$query = $em->createQuery($dql);
        //$customers = $em->getRepository('AppBundle:Customer')->findAll();
        $queryBuilder = $em->getRepository('AppBundle:Customer')->createQueryBuilder('c');
        if ($request->query->getAlnum('filter')) {
            $queryBuilder
                ->where('c.name LIKE :name')
                ->setParameter('name', '%' .$request->query->getAlnum('filter').'%');
        }
        elseif ($request->query->getAlnum('customercode_filter')) {
                    $queryBuilder
                        ->where('c.customercode LIKE :customercode')
                        ->setParameter('customercode', '%' .$request->query->getAlnum('customercode_filter').'%');
            }
        $query =$queryBuilder->getQuery();

        /**
        * @var $paginator /Knp/Component/Pager/Paginator
        */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate($query,
                             $request->query->getInt('page', 1),
                             $request->query->getInt('limit', 5)   );

        return $this->render('customer/index.html.twig', array(
            'customers' => $result,
        ));
    }



    /**
     * Creates a new customer entity.
     *
     * @Route("/new", name="customer_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $customer = new Customer();
        $form = $this->createForm('AppBundle\Form\CustomerType', $customer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();

            return $this->redirectToRoute('custaddress_new', array('customercode' => $customer->getCustomercode()));
        }

        return $this->render('customer/new.html.twig', array(
            'customer' => $customer,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a customer entity.
     *
     * @Route("/{customercode}", name="customer_show")
     * @Method("GET")
     */
    public function showAction(Customer $customer)
    {
        $session = new Session(new PhpBridgeSessionStorage());

        $deleteForm = $this->createDeleteForm($customer);
        $customercode =$customer->getCustomercode();
        $session->set('showcode',$customercode);
        //dump($session->get('showcode'));
        $em = $this->getDoctrine()->getManager();
        $address = $em->getRepository('AppBundle:Custaddress')->findBy(array('customercode' => $customercode ));
        return $this->render('customer/show.html.twig', array(
            'customer' => $customer,
            'delete_form' => $deleteForm->createView(),
            'custaddresses' => $address,
        ));
    }

    /**
     * Displays a form to edit an existing customer entity.
     *
     * @Route("/{customercode}/edit", name="customer_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Customer $customer)
    {
        $deleteForm = $this->createDeleteForm($customer);
        $editForm = $this->createForm('AppBundle\Form\editCustomerType', $customer);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('customer_edit', array('customercode' => $customer->getCustomercode()));
        }

        return $this->render('customer/edit.html.twig', array(
            'customer' => $customer,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a customer entity.
     *
     * @Route("/{customercode}", name="customer_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Customer $customer)
    {
        $form = $this->createDeleteForm($customer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($customer);
            $em->flush();
        }

        return $this->redirectToRoute('customer_index');
    }

    /**
     * Creates a form to delete a customer entity.
     *
     * @param Customer $customer The customer entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Customer $customer)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('customer_delete', array('customercode' => $customer->getCustomercode())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
