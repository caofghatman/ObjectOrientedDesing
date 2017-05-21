<?php

namespace ObjectOrientedDesignBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ObjectOrientedDesignBundle:Default:index.html.twig');
    }
}
