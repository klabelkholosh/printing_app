<?php

namespace Prinfo\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PrinfoTestBundle:Default:index.html.twig');
    }
}
