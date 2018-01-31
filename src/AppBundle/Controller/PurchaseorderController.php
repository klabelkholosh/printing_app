<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Purchaseorder;
use AppBundle\Entity\Supplier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage;

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
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //$purchaseorders = $em->getRepository('AppBundle:Purchaseorder')->findAll();
        $dql = $em->getRepository('AppBundle:Purchaseorder')->createQueryBuilder('p');
        if ($request->query->getAlnum('pofilter_filter')) {
            $dql->where('IDENTITY(p.suppliercode) LIKE :number')
                ->setParameter('number', '%'. $request->query->get('pofilter_filter') .'%');
        }
        $dql->orderBy('p.ponumber','DESC');
        $query = $dql->getQuery();
        $paginator = $this->get('knp_paginator');
        $purchaseorders = $paginator->paginate($query,
                             $request->query->getInt('page', 1),
                             $request->query->getInt('limit', 5)   );
        return $this->render('purchaseorder/index.html.twig', array(
            'purchaseorders' => $purchaseorders,
        ));
    }

  /** Lists all supplier entities.
     *
     * @Route("/maintenance/", name="purchase_maintenance")
     * @Method("GET")
     */
    public function maintenanceAction(Request $request)
    {
        $purchaseorder = new Purchaseorder();
        $supplier = new Supplier();
        $em = $this->getDoctrine()->getManager();
        //$suppliers = $em->getRepository('AppBundle:Supplier')->findAll();
        $dql = $em->getRepository('AppBundle:Supplier')->createQueryBuilder('s');
        $dqlPonumber = $em->getRepository('AppBundle:Polines')->createQueryBuilder('p');
        //$dqlMaterial = $em->getRepository('AppBundle:Material')->createQueryBuilder('m');
        if ($request->query->getAlnum('Ponumber_filter')) {

            $dqlPonumber->where('IDENTITY(p.ponumber) LIKE :po_num')
                ->setParameter('po_num', '%'. $request->query->get('Ponumber_filter') .'%');

        }
        elseif ($request->query->getAlnum('supplier_filter')) {

                $dql->where('s.suppliercode LIKE :sup_code')
                ->setParameter('sup_code', '%'. $request->query->get('supplier_filter') .'%');
            } 
            /* elseif ($request->query->getAlnum('material_filter')) {
                  $dqlMaterial->where('m.materialcode LIKE :mat_code')
                ->setParameter('mat_code', '%'. $request->query->get('material_filter') .'%');
            } */

            //return $this->redirectToRoute('purchaseorder_index', array('ponumber' => $purchaseorder->getPonumber()));
        
        
        $query = $dql->getQuery();
        $queryPonum = $dqlPonumber->getQuery();
        //$queryMat = $dqlMaterial->getQuery();
        $paginator = $this->get('knp_paginator');
        $suppliers = $paginator->paginate($query,
                             $request->query->getInt('page', 1),
                             $request->query->getInt('limit', 10)   );
        /*$polines = $paginator->paginate($queryPonum,
                             $request->query->getInt('page', 1),
                             $request->query->getInt('limit', 10)   );*/
        /*$materials = $paginator->paginate($queryMat,
                             $request->query->getInt('page', 1),
                             $request->query->getInt('limit', 10)   ); */
        return $this->render('purchaseorder/PoMaintanace.html.twig', array(
            'suppliers' => $suppliers,
            //'polines' => $polines,
            'materials' => $materials,
        ));
    }

    /** Lists all supplier entities.
     *
     * @Route("/newOrder/", name="purchase_newOrder")
     * @Method("GET")
     */
    public function newOrderAction(Request $request)
    {
        $purchaseorder = new Purchaseorder();
        $supplier = new Supplier();
        $em = $this->getDoctrine()->getManager();
        //$suppliers = $em->getRepository('AppBundle:Supplier')->findAll();
        $dql = $em->getRepository('AppBundle:Supplier')->createQueryBuilder('s');
        if ($request->query->getAlnum('supplier_name')) {

            $dql->where('s.suppliername LIKE :name')
                ->setParameter('name', '%'. $request->query->get('supplier_name') .'%');

        }elseif ($request->query->getAlnum('supplier_id')) {

            $supplier_id = $request->query->get('supplier_id');
            $date = $request->query->get('date');
            $ponumber = $request->query->get('ponumber');
            foreach ($supplier_id as $id) {
                $supplier->suppliercode = $id;
                $ponumber = $purchaseorder->getPonumber();
                $purchaseorder->setDaterequired(\DateTime::createFromFormat('d-m-Y', $date));
                $purchaseorder->setSuppliercode($supplier);
                $em->merge($purchaseorder);
                $em->flush();
            } 
            return $this->redirectToRoute('purchaseorder_index', array('ponumber' => $purchaseorder->getPonumber()));
        }
        
        $query = $dql->getQuery();
        $paginator = $this->get('knp_paginator');
        $suppliers = $paginator->paginate($query,
                             $request->query->getInt('page', 1),
                             $request->query->getInt('limit', 5)   );
        return $this->render('purchaseorder/newOrder.html.twig', array(
            'suppliers' => $suppliers,
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
        $session = new Session(new PhpBridgeSessionStorage());
        $session->set('showpoline',$purchaseorder->getPonumber());
        $deleteForm = $this->createDeleteForm($purchaseorder);
        $ponumber = $purchaseorder->getPonumber();
        $em = $this->getDoctrine()->getManager();
        $polines = $em->getRepository('AppBundle:Polines')->findBy(array('ponumber' => $ponumber));
        return $this->render('purchaseorder/show.html.twig', array(
            'purchaseorder' => $purchaseorder,
            'delete_form' => $deleteForm->createView(),
            'polines' => $polines,
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
