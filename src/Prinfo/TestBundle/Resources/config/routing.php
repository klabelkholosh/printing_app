<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('prinfo_test_homepage', new Route('/', array(
    '_controller' => 'PrinfoTestBundle:Default:index',
)));

return $collection;
