<?php

namespace PW\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PWPortfolioBundle:Default:index.html.twig', array('name' => $name));
    }
}
