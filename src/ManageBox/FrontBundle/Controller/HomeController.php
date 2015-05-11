<?php

namespace ManageBox\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
    	// Variables
    	$params 			= array();


        return $this->render('ManageBoxFrontBundle:Home:index.html.twig', $params);
    }
}
