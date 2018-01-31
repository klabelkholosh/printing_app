<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Polines;
use AppBundle\Entity\Purchaseorder;
use AppBundle\Entity\Material;
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
        dump($polines);
        return $this->render('polines/index.html.twig', array(
            'polines' => $polines,
        ));
    }

    /**
    * Create a new poline entity by selecting materialcode
    *
    * @Route("/create_poline/{materialcode}/{ponumber}/", name="create_poline")
    * @Method({"GET", "POST"})
    */
    public function createPolineAction(Request $request, Material $ojbmat, $ponumber,Purchaseorder $objpurchase)
    {
        $polines =new Polines();
        $materialcode = $ojbmat->getMaterialcode();
        $em = $this->getDoctrine()->getManager();
        $material = $em->getRepository('AppBundle:Material')->findOneBy(array('materialcode' => $materialcode));
        if ($request->getMethod() == "POST") {
            $qty = $request->request->get('quantity');
            $price = $request->request->get('price');
            $priceunit = $request->request->get('priceunit');
            $stkunit = $request->request->get('stkunitconv');
            $person = $request->request->get('person');

            $polines->setMaterialcode($material);
            $polines->setPonumber($objpurchase);
            $polines->setQuantity($qty);
            $polines->setPriceunit($priceunit);
            $polines->setPrice($price);
            $polines->setStkunitconv($stkunit);
            $polines->setStatus('O');
            $polines->setPerson($person);

            $em->persist($polines);
            $em->flush();
            return $this->redirectToRoute('purchaseorder_show', array('ponumber' => $ponumber));
        }
        return $this->render('polines/new.html.twig', array('poline'=>$ponumber,'material' =>$material));
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
        $poline = new Polines();
        $objponumber = new Purchaseorder();
        $session = new Session(new PhpBridgeSessionStorage());
        $collection = new ArrayCollection();
        $em = $this->getDoctrine()->getManager();
        $ponum = $session->get('showpoline'); 
        $form = $this->createForm('AppBundle\Form\PolinesType', $poline);
        $form->handleRequest($request);
        
        $objponumber->ponumber = $ponum;
        if ($form->isSubmitted() && $form->isValid()) {
            //$qty = $poline->getQuantity();
            $mat = $poline->getMaterialcode();
            $code = $mat->last()->getMaterialcode();
 
            return $this->redirectToRoute('create_poline', array('poline'=>$poline ,
                                                            'ponumber' => trim($ponum), 
                                                            'materialcode' => trim($code)));
        }

       return $this->render('polines/newPoline.html.twig', array(
            'poline' => $poline,'ponumber'=>$ponum,
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
