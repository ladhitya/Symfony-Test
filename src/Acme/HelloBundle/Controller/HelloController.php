<?php
// src/Acme/HelloBundle/Controller/HelloController.php
namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\HelloBundle\Entity\Product;

//use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        
        $req = $this->getRequest();
        //$name = $req->query->get('page');
        
        return $this->render('AcmeHelloBundle:Hello:index2.html.twig', array('name' => $name));
        //return $this->render('AcmeHelloBundle:Hello:index.html.php', array('name' => $name));
        //return new Response('<html><body>Hello '.$name.'!!</body></html>');
    }
    
    public function noteAction($for='')
    {
        //echo $for;
        return $this->render('AcmeHelloBundle:Hello:note.html.twig', array('name'=>$for));   
    }
    
    public function createAction() {
        $product = new Product();
        $product->setName('Test');
        $product->setKeyword('boom');
        $product->setShortcode('333888');
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($product);
        $em->flush();
        
        return new Response('Created product id '.$product->getId());
    }
    
}

