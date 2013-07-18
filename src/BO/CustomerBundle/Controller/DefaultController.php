<?php

namespace BO\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BOCustomerBundle:Default:index.html.twig', array('name' => $name));
    }
}
