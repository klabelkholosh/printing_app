<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Matgroup;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Matgroup controller.
 *
 * @Route("matgroup")
 */
class MatgroupController extends Controller
{
    /**
     * Lists all matgroup entities.
     *
     * @Route("/", name="matgroup_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $matgroups = $em->getRepository('AppBundle:Matgroup')->findAll();

        return $this->render('matgroup/index.html.twig', array(
            'matgroups' => $matgroups,
        ));
    }

    /**
     * Creates a new matgroup entity.
     *
     * @Route("/new", name="matgroup_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $matgroup = new Matgroup();
        $form = $this->createForm('AppBundle\Form\MatgroupType', $matgroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($matgroup);
            $em->flush();

            return $this->redirectToRoute('matgroup_show', array('groupcode' => $matgroup->getGroupcode()));
        }

        return $this->render('matgroup/new.html.twig', array(
            'matgroup' => $matgroup,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a matgroup entity.
     *
     * @Route("/{groupcode}", name="matgroup_show")
     * @Method("GET")
     */
    public function showAction(Matgroup $matgroup)
    {
        $deleteForm = $this->createDeleteForm($matgroup);

        return $this->render('matgroup/show.html.twig', array(
            'matgroup' => $matgroup,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing matgroup entity.
     *
     * @Route("/{groupcode}/edit", name="matgroup_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Matgroup $matgroup)
    {
        $deleteForm = $this->createDeleteForm($matgroup);
        $editForm = $this->createForm('AppBundle\Form\MatgroupType', $matgroup);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('matgroup_edit', array('groupcode' => $matgroup->getGroupcode()));
        }

        return $this->render('matgroup/edit.html.twig', array(
            'matgroup' => $matgroup,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a matgroup entity.
     *
     * @Route("/{groupcode}", name="matgroup_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Matgroup $matgroup)
    {
        $form = $this->createDeleteForm($matgroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($matgroup);
            $em->flush();
        }

        return $this->redirectToRoute('matgroup_index');
    }

    /**
     * Creates a form to delete a matgroup entity.
     *
     * @param Matgroup $matgroup The matgroup entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Matgroup $matgroup)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('matgroup_delete', array('groupcode' => $matgroup->getGroupcode())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
