<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Home controller.
 *
 * @Route("home")
 */
class HomeController extends Controller
{
	 /**
     * Show homepage
     *
     * @Route("/", name="home_index")
     * @Method("GET")
     */
	public function indexAction()
  {
        return $this->render('home/index.html.twig');
   }

}

?>