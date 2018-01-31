<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     * 
     */
    public function loginAction(Request $request)
    {

        if ($request->getMethod('POST')) {
            $username = $request->get('_username');
            $password = $request->get('_password');
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('AppBundle:Customer');
            $user = $repository->findOneBy(array('loginemail'=>$username, 'password'=>$password));
            dump($request);
            if ($user) {
                return $this->render('customer/new.html.twig');
                            }
        }
        
        
        // replace this example code with whatever you need
        return $this->render('security/login.html.twig', array('loginemail'=>$username, 'password'=>$password));
    }
}
