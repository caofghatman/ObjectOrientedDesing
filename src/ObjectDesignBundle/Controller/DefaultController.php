<?php
namespace ObjectDesignBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ObjectDesignBundle\SingleResponsibilityPrinciple\Gear;
use ObjectDesignBundle\SingleResponsibilityPrinciple\Gear3;
use ObjectDesignBundle\SingleResponsibilityPrinciple\Gear2;
use ObjectDesignBundle\SingleResponsibilityPrinciple\Wheel;
use ObjectDesignBundle\Dependance\Gear4;

class DefaultController extends Controller
{
	use SingleResponsibilityPrincipleTrait;
	use DependanceTrait;
	
    public function indexAction()
    {
    	$this->singleResponsibilityPrinciple();
    	$this->dependance();
    	$this->dependanceDirection();
   	 
        return $this->render('ObjectDesignBundle:Default:index.html.twig');
    }
}
