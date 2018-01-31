<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Salesorders;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Salesorder controller.
 *
 * @Route("salesorders")
 */
class SalesordersController extends Controller
{
    /**
     * Lists all salesorder entities.
     *
     * @Route("/", name="salesorders_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $salesorders = $em->getRepository('AppBundle:Salesorders')->findAll();

        return $this->render('salesorders/index.html.twig', array(
            'salesorders' => $salesorders,
        ));
    }

    /**
     * Creates a new salesorder entity.
     *
     * @Route("/new", name="salesorders_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $salesorder = new Salesorders();
        $form = $this->createForm('AppBundle\Form\SalesordersType', $salesorder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($salesorder);
            $em->flush();

            return $this->redirectToRoute('salesorders_show', array('sonumber' => $salesorder->getSonumber()));
        }

        return $this->render('salesorders/new.html.twig', array(
            'salesorder' => $salesorder,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a salesorder entity.
     *
     * @Route("/{sonumber}", name="salesorders_show")
     * @Method("GET")
     */
    public function showAction(Salesorders $salesorder)
    {
        $deleteForm = $this->createDeleteForm($salesorder);

        return $this->render('salesorders/show.html.twig', array(
            'salesorder' => $salesorder,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing salesorder entity.
     *
     * @Route("/{sonumber}/edit", name="salesorders_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Salesorders $salesorder)
    {
        $deleteForm = $this->createDeleteForm($salesorder);
        $editForm = $this->createForm('AppBundle\Form\SalesordersType', $salesorder);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('salesorders_edit', array('sonumber' => $salesorder->getSonumber()));
        }

        return $this->render('salesorders/edit.html.twig', array(
            'salesorder' => $salesorder,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a salesorder entity.
     *
     * @Route("/{sonumber}", name="salesorders_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Salesorders $salesorder)
    {
        $form = $this->createDeleteForm($salesorder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($salesorder);
            $em->flush();
        }

        return $this->redirectToRoute('salesorders_index');
    }

    /**
     * Creates a form to delete a salesorder entity.
     *
     * @param Salesorders $salesorder The salesorder entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Salesorders $salesorder)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('salesorders_delete', array('sonumber' => $salesorder->getSonumber())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
