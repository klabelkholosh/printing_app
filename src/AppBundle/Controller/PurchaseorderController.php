<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Purchaseorder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Purchaseorder controller.
 *
 * @Route("purchaseorder")
 */
class PurchaseorderController extends Controller
{
    /**
     * Lists all purchaseorder entities.
     *
     * @Route("/", name="purchaseorder_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $purchaseorders = $em->getRepository('AppBundle:Purchaseorder')->findAll();

        return $this->render('purchaseorder/index.html.twig', array(
            'purchaseorders' => $purchaseorders,
        ));
    }

    /**
     * Creates a new purchaseorder entity.
     *
     * @Route("/new", name="purchaseorder_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $purchaseorder = new Purchaseorder();
        $form = $this->createForm('AppBundle\Form\PurchaseorderType', $purchaseorder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($purchaseorder);
            $em->flush();

            return $this->redirectToRoute('purchaseorder_show', array('ponumber' => $purchaseorder->getPonumber()));
        }

        return $this->render('purchaseorder/new.html.twig', array(
            'purchaseorder' => $purchaseorder,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a purchaseorder entity.
     *
     * @Route("/{ponumber}", name="purchaseorder_show")
     * @Method("GET")
     */
    public function showAction(Purchaseorder $purchaseorder)
    {
        $deleteForm = $this->createDeleteForm($purchaseorder);

        return $this->render('purchaseorder/show.html.twig', array(
            'purchaseorder' => $purchaseorder,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing purchaseorder entity.
     *
     * @Route("/{ponumber}/edit", name="purchaseorder_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Purchaseorder $purchaseorder)
    {
        $deleteForm = $this->createDeleteForm($purchaseorder);
        $editForm = $this->createForm('AppBundle\Form\PurchaseorderType', $purchaseorder);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('purchaseorder_edit', array('ponumber' => $purchaseorder->getPonumber()));
        }

        return $this->render('purchaseorder/edit.html.twig', array(
            'purchaseorder' => $purchaseorder,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a purchaseorder entity.
     *
     * @Route("/{ponumber}", name="purchaseorder_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Purchaseorder $purchaseorder)
    {
        $form = $this->createDeleteForm($purchaseorder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($purchaseorder);
            $em->flush();
        }

        return $this->redirectToRoute('purchaseorder_index');
    }

    /**
     * Creates a form to delete a purchaseorder entity.
     *
     * @param Purchaseorder $purchaseorder The purchaseorder entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Purchaseorder $purchaseorder)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('purchaseorder_delete', array('ponumber' => $purchaseorder->getPonumber())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
