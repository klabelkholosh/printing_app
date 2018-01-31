<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Defaultmaterial;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Defaultmaterial controller.
 *
 * @Route("defaultmaterial")
 */
class DefaultmaterialController extends Controller
{
    /**
     * Lists all defaultmaterial entities.
     *
     * @Route("/", name="defaultmaterial_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $defaultmaterials = $em->getRepository('AppBundle:Defaultmaterial')->findAll();

        return $this->render('defaultmaterial/index.html.twig', array(
            'defaultmaterials' => $defaultmaterials,
        ));
    }

    /**
     * Creates a new defaultmaterial entity.
     *
     * @Route("/new", name="defaultmaterial_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $defaultmaterial = new Defaultmaterial();
        $form = $this->createForm('AppBundle\Form\DefaultmaterialType', $defaultmaterial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($defaultmaterial);
            $em->flush();

            return $this->redirectToRoute('defaultmaterial_show', array('defmatkey' => $defaultmaterial->getDefmatkey()));
        }

        return $this->render('defaultmaterial/new.html.twig', array(
            'defaultmaterial' => $defaultmaterial,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a defaultmaterial entity.
     *
     * @Route("/{defmatkey}", name="defaultmaterial_show")
     * @Method("GET")
     */
    public function showAction(Defaultmaterial $defaultmaterial)
    {
        $deleteForm = $this->createDeleteForm($defaultmaterial);

        return $this->render('defaultmaterial/show.html.twig', array(
            'defaultmaterial' => $defaultmaterial,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing defaultmaterial entity.
     *
     * @Route("/{defmatkey}/edit", name="defaultmaterial_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Defaultmaterial $defaultmaterial)
    {
        $deleteForm = $this->createDeleteForm($defaultmaterial);
        $editForm = $this->createForm('AppBundle\Form\DefaultmaterialType', $defaultmaterial);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('defaultmaterial_edit', array('defmatkey' => $defaultmaterial->getDefmatkey()));
        }

        return $this->render('defaultmaterial/edit.html.twig', array(
            'defaultmaterial' => $defaultmaterial,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a defaultmaterial entity.
     *
     * @Route("/{defmatkey}", name="defaultmaterial_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Defaultmaterial $defaultmaterial)
    {
        $form = $this->createDeleteForm($defaultmaterial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($defaultmaterial);
            $em->flush();
        }

        return $this->redirectToRoute('defaultmaterial_index');
    }

    /**
     * Creates a form to delete a defaultmaterial entity.
     *
     * @param Defaultmaterial $defaultmaterial The defaultmaterial entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Defaultmaterial $defaultmaterial)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('defaultmaterial_delete', array('defmatkey' => $defaultmaterial->getDefmatkey())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
