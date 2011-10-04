<?php
// src/Acme/HiBundle/Controller/HelloController.php
namespace Acme\HelloBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    return new Response('<html><body>Hi '.$name.'!</body></html>');
}