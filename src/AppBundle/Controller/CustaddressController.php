<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use AppBundle\Entity\Custaddress;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Custaddress controller.
 *
 * @Route("custaddress")
 */
class CustaddressController extends Controller
{
    /**
     * Lists all custaddress entities.
     *
     * @Route("/", name="custaddress_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $custaddresses = $em->getRepository('AppBundle:Custaddress')->findAll();

        return $this->render('custaddress/index.html.twig', array(
            'custaddresses' => $custaddresses,
        ));
    }

    /**
     * Creates a new custaddress entity.
     *
     * @Route("/new/{customercode}", name="custaddress_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $customercode, Customer $custObj)
    {
        
        $custaddress = new Custaddress();
        $form = $this->createForm('AppBundle\Form\CustaddressType', $custaddress);
        $form->handleRequest($request);
        
        echo $customercode;
        if ($form->isSubmitted() && $form->isValid()) {
            
            $custaddress->setCustomercode($custObj);
            $em = $this->getDoctrine()->getManager();
            $em->persist($custaddress);
            $em->flush();

            return $this->redirectToRoute('custaddress_index');
        }

        return $this->render('custaddress/new.html.twig', array(
            'custaddress' => $custaddress,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a custaddress entity.
     *
     * @Route("/{addressnumber}", name="custaddress_show")
     * @Method("GET")
     */
    public function showAction(Custaddress $custaddress)
    {
        $deleteForm = $this->createDeleteForm($custaddress);

        return $this->render('custaddress/show.html.twig', array(
            'custaddress' => $custaddress,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing custaddress entity.
     *
     * @Route("/{addressnumber}/edit", name="custaddress_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Custaddress $custaddress)
    {
        $deleteForm = $this->createDeleteForm($custaddress);
        $editForm = $this->createForm('AppBundle\Form\CustaddressType', $custaddress);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('custaddress_index', array('addressnumber' => $custaddress->getAddressnumber()));
        }

        return $this->render('custaddress/edit.html.twig', array(
            'custaddress' => $custaddress,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a custaddress entity.
     *
     * @Route("/{addressnumber}", name="custaddress_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Custaddress $custaddress)
    {
        $form = $this->createDeleteForm($custaddress);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($custaddress);
            $em->flush();
        }

        return $this->redirectToRoute('custaddress_index');
    }

    /**
     * Creates a form to delete a custaddress entity.
     *
     * @param Custaddress $custaddress The custaddress entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Custaddress $custaddress)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('custaddress_delete', array('addressnumber' => $custaddress->getAddressnumber())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
