<?php

namespace Acme\HiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('AcmeHiBundle:Default:index.html.twig', array('name' => $name));
    }
}
