<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Poline;
use AppBundle\Entity\Purchaseorder;
use AppBundle\Entity\Material;
use AppBundle\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Poline controller.
 *
 * @Route("poline")
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

        $polines = $em->getRepository('AppBundle:Poline')->findAll();
        dump($polines);
        return $this->render('polines/index.html.twig', array(
            'polines' => $polines,
        ));
    }

   /** Get poheader by materialcode
    *
    *@Route("/supplier-poheader/{materialcode}", name="supplier_poheader")
    *@Method("GET")
    */
   public function materialPoheaderAction($materialcode, Request $request)
   {
        $em = $this->getDoctrine()->getManager();
        if ($request->query->getAlnum('status_filter')) {
            $status = $request->query->get('status_filter');
            $poheader =$em->getRepository('AppBundle:Poline')->findBy(array('materialcode'=>$materialcode,'status'=>$status));
        }else
            {
                $poheader =$em->getRepository('AppBundle:Poline')->findBy(array('materialcode'=>$materialcode));                
            }
        return $this->render('polines/materialPoheader.html.twig', array('poheader'=>$poheader,));

   }

    /**
    * Create a new poline entity by selecting materialcode
    *
    * @Route("/create_poline/{materialcode}/{ponumber}/", name="create_poline")
    * @Method({"GET", "POST"})
    */
    public function createPolineAction(Request $request, Material $ojbmat, $ponumber,Purchaseorder $objpurchase)
    {
        $polines =new Poline();
        $person_code = new Person;
        $materialcode = $ojbmat->getMaterialcode();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm('AppBundle\Form\PolinesType', $polines);
        $form->handleRequest($request);
        $dql = $em->getRepository('AppBundle:Person')->createQueryBuilder('p');
        if ($request->query->getAlnum('pcode_filter')) {
            $dql->where('p.personcode LIKE :code')
                ->setParameter('code', '%'. $request->query->get('pcode_filter') .'%');
        }
        $query = $dql->getQuery();
        $paginator = $this->get('knp_paginator');
        $person = $paginator->paginate($query,
                            $request->query->getInt('page', 1),
                            $request->query->getInt('limit', 5)   );
        $material = $em->getRepository('AppBundle:Material')->findOneBy(array('materialcode' => $materialcode));
        if ($request->getMethod() == "POST") {
            $qty = $request->request->get('quantity');
            $price = $request->request->get('price');
            $priceunit = $request->request->get('priceunit');
            $stkunit = $request->request->get('stkunitconv');
            $person = $request->request->get('personcode');
            $person_code->personcode = $person;
            $polines->setMaterialcode($material);
            $polines->setPonumber($objpurchase);
            $polines->setQuantity($qty);
            $polines->setPriceunit($priceunit);
            $polines->setPrice($price);
            $polines->setStkunitconv($stkunit);
            $polines->setStatus('O');
            $polines->setPerson($person_code);
            $em->merge($polines);
            $em->flush();
            return $this->redirectToRoute('purchaseorder_show', array('ponumber' => $ponumber));
        }
        return $this->render('polines/new.html.twig', array('poline'=>$ponumber,
                                                            'persons'=>$person,
                                                            'form' => $form->createView(),
                                                            'material' =>$material));
    }

   /**
     * Creates a new poline entity.
     *
     * @Route("/newer", name="polines_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $material = new Material();
        $poline = new Poline();
        $objponumber = new Purchaseorder();
        $session = new Session(new PhpBridgeSessionStorage());
        //$collection = new ArrayCollection();
        $em = $this->getDoctrine()->getManager();
        $dql = $em->getRepository('AppBundle:Material')->createQueryBuilder('m');
        $ponum = $session->get('showpoline'); 
        $form = $this->createForm('AppBundle\Form\PolinesType', $poline);
        $form->handleRequest($request);
        
        $objponumber->ponumber = $ponum;
        if ($request->query->getAlnum('material_filter')) {
            $dql->where('m.materialcode LIKE :code')
                ->setParameter('code', '%'. $request->query->get('material_filter') .'%'); 
            
        }elseif ($request->query->getAlnum('mcode')) {
            $mat = $request->query->get('mcode');
            return $this->redirectToRoute('create_poline', array('poline'=>$poline ,
                                                            'ponumber' => trim($ponum), 
                                                            'materialcode' => trim($mat)));
        }
       $query = $dql->getQuery();
       $paginator = $this->get('knp_paginator');
       $material = $paginator->paginate($query,
                            $request->query->getInt('page', 1),
                            $request->query->getInt('limit', 7)   );

       return $this->render('polines/selectMaterial.html.twig', array(
            'poline' => $poline,'ponumber'=>$ponum,
            'form' => $form->createView(),
            'materials' => $material,
        ));
    }
    /**
     * Finds and displays a poline entity.
     *
     * @Route("/{ponumber}", name="polines_show")
     * @Method("GET")
     */
    public function showAction(Poline $poline)
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
    public function editAction(Request $request, Poline $poline)
    {
        $deleteForm = $this->createDeleteForm($poline);
        $editForm = $this->createForm('AppBundle\Form\PolinesEditType', $poline);
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
    public function deleteAction(Request $request, Poline $poline)
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
     * @param Poline $poline The poline entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Poline $poline)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('polines_delete', array('ponumber' => $poline->getPonumber())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
