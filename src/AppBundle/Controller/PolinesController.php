<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Polines;
use AppBundle\Entity\Material;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Poline controller.
 *
 * @Route("polines")
 */
class PolinesController extends Controller
{
    /**
     * Lists all poline entities.
     *
     * @Route("/", name="polines_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $polines = $em->getRepository('AppBundle:Polines')->findAll();

        return $this->render('polines/index.html.twig', array(
            'polines' => $polines,
        ));
    }

    /**
     * Creates a new poline entity.
     *
     * @Route("/new", name="polines_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $material = new Material();
        $poline = new Polines();
        $form = $this->createForm('AppBundle\Form\PolinesType', $poline);
        $form->handleRequest($request);
        $metcode = $form->get('materialcode')->getData();
            dump($metcode);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($poline);
            $em->flush();

            return $this->redirectToRoute('polines_show', array('ponumber' => $poline->getPonumber()));
        }

        return $this->render('polines/new.html.twig', array(
            'poline' => $poline,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a poline entity.
     *
     * @Route("/{ponumber}", name="polines_show")
     * @Method("GET")
     */
    public function showAction(Polines $poline)
    {
        $deleteForm = $this->createDeleteForm($poline);

        return $this->render('polines/show.html.twig', array(
            'poline' => $poline,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing poline entity.
     *
     * @Route("/{ponumber}/edit", name="polines_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Polines $poline)
    {
        $deleteForm = $this->createDeleteForm($poline);
        $editForm = $this->createForm('AppBundle\Form\PolinesType', $poline);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('polines_edit', array('ponumber' => $poline->getPonumber()));
        }

        return $this->render('polines/edit.html.twig', array(
            'poline' => $poline,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a poline entity.
     *
     * @Route("/{ponumber}", name="polines_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Polines $poline)
    {
        $form = $this->createDeleteForm($poline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($poline);
            $em->flush();
        }

        return $this->redirectToRoute('polines_index');
    }

    /**
     * Creates a form to delete a poline entity.
     *
     * @param Polines $poline The poline entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Polines $poline)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('polines_delete', array('ponumber' => $poline->getPonumber())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
