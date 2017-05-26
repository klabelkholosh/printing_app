<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Material;
use AppBundle\Entity\Matgroup;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Material controller.
 *
 * @Route("material")
 */
class MaterialController extends Controller
{
    /**
     * Lists all material entities.
     *
     * @Route("/", name="material_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //$materials = $em->getRepository('AppBundle:Material')->findAll();
        $queryBuilder = $em->getRepository('AppBundle:Material')->createQueryBuilder('m');
        if ($request->query->getAlnum('type_filter')) {
            $queryBuilder
                ->where('m.type LIKE :type')
                ->setParameter('type', '%' .$request->query->getAlnum('filter').'%');
        }
        elseif ($request->query->getAlnum('code_filter')) {
                    $queryBuilder
                        ->where('m.materialcode LIKE :materialcode')
                        ->setParameter('materialcode', '%' .$request->query->getAlnum('code_filter').'%');
            }
        $query =$queryBuilder->getQuery();

        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate($query,
                             $request->query->getInt('page', 1),
                             $request->query->getInt('limit', 5)   );

        return $this->render('material/index.html.twig', array(
            'materials' => $result,
        ));
    }

    /**
     * Creates a new material entity.
     *
     * @Route("/new", name="material_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $material = new Material();


        $form = $this->createForm('AppBundle\Form\MaterialType', $material);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $material = $em->find('Material', $matgroup);            

            $em->persist($material);
            $em->flush();

            return $this->redirectToRoute('material_show', array('materialcode' => $material->getMaterialcode()));
        }

        return $this->render('material/new.html.twig', array(
            'material' => $material,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a material entity.
     *
     * @Route("/{materialcode}", name="material_show")
     * @Method("GET")
     */
    public function showAction(Material $material)
    {
        $deleteForm = $this->createDeleteForm($material);

        return $this->render('material/show.html.twig', array(
            'material' => $material,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing material entity.
     *
     * @Route("/{materialcode}/edit", name="material_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Material $material)
    {
        $deleteForm = $this->createDeleteForm($material);
        $editForm = $this->createForm('AppBundle\Form\MaterialType', $material);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('material_edit', array('materialcode' => $material->getMaterialcode()));
        }

        return $this->render('material/edit.html.twig', array(
            'material' => $material,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a material entity.
     *
     * @Route("/{materialcode}", name="material_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Material $material)
    {
        $form = $this->createDeleteForm($material);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($material);
            $em->flush();
        }

        return $this->redirectToRoute('material_index');
    }

    /**
     * Creates a form to delete a material entity.
     *
     * @param Material $material The material entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Material $material)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('material_delete', array('materialcode' => $material->getMaterialcode())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
