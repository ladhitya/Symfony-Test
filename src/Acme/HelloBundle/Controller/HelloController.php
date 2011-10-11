<?php
// src/Acme/HelloBundle/Controller/HelloController.php
namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\HelloBundle\Entity\CampaignTag;
use Acme\HelloBundle\Entity\Product;
use Acme\HelloBundle\Form\Type\ProductType;


use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        
        $req = $this->getRequest();
        //$name = $req->query->get('page');
        $shortcode = $req->query->get('shortcode');
        $prodId = $req->query->get('pid');
        $products = array();
        if(!empty($shortcode)) {
            // basic query based on the shortcode
            //$products = $this->getDoctrine()->getRepository('AcmeHelloBundle:Product')->findByShortcode($shortcode);
            
            // custom repository
           // $products = $this->getDoctrine()->getRepository('AcmeHelloBundle:Product')->findAllOrderByName();
            
            // custom repository with variable
            $products = $this->getDoctrine()->getRepository('AcmeHelloBundle:Product')->findSpecificOrderByName($shortcode);
            
        }
        else if (!empty($prodId)) {
            // query with join table
            $products = $this->getDoctrine()->getRepository('AcmeHelloBundle:Product')->findAllInfoSpecificProductById($prodId);
        }
        
        return $this->render('AcmeHelloBundle:Hello:index2.html.twig', array('name' => $name, 'products' => $products));
        //return $this->render('AcmeHelloBundle:Hello:index.html.php', array('name' => $name));
        //return new Response('<html><body>Hello '.$name.'!!</body></html>');
    }
    
    public function noteAction($for='')
    {
        //echo $for;
        return $this->render('AcmeHelloBundle:Hello:note.html.twig', array('name'=>$for));   
    }
    
    public function createAction() {
        $tag = new CampaignTag();
        $tag->setName('333888');
        
        $req = $this->getRequest();
        
        $productName = $req->query->get('name');
        $productName = (!empty($productName))?$productName:'Test';
        $productKeyword = $req->query->get('key');
        $productKeyword = (!empty($productKeyword))?$productKeyword:'boom';
        $productShortcode = $req->query->get('scode');
        $productShortcode = (!empty($productShortcode))?$productShortcode:'333888';
        
        $product = new Product();
        $product->setName($productName);
        $product->setKeyword($productKeyword);
        $product->setShortcode($productShortcode);
        $product->setTag($tag);
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($product);
        $em->persist($tag);
        $em->flush();
        
        return new Response('Created product id '.$product->getId().' in tag with id '.$tag->getId());
    }
    
    public function addAction() {
        $product = new Product();
        $form = $this->createForm(new ProductType(),$product);
        
        $request = $this->getRequest();
        // submission handling
        if ($request->getMethod() == 'POST') {
            //echo 'right here!';
            $form->bindRequest($request);

            if ($form->isValid()) {
                //echo 'valid';
            }
        }
        
        return $this->render('AcmeHelloBundle:Hello:newProduct.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
}

