<?php

namespace BO\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BOBackOfficeBundle:Default:index.html.twig');
    }
}
