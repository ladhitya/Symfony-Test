<?php
// src/Acme/HelloBundle/Controller/HelloController.php
namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        
        $req = $this->getRequest();
        $name = $req->query->get('page');
        
        return $this->render('AcmeHelloBundle:Hello:index.html.twig', array('name' => $name));
        //return $this->render('AcmeHelloBundle:Hello:index.html.php', array('name' => $name));
        //return new Response('<html><body>Hello '.$name.'!!</body></html>');
    }    
    
}

