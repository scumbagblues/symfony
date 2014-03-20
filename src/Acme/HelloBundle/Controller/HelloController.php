<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller{

	public function indexAction($firstName, $lastName, $color)
	{
		//return new Response('<html><body>Hello '.$firstName.$lastName.$color.'!</body></html>');
            $content = $this->renderView(
                'AcmeHelloBundle:Hello:index.html.twig',
                array('name' => $firstName)
            );
            
            return new Response($content);
	}
}