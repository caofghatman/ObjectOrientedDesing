<?php
namespace ObjectDesignBundle\Controller;

trait DependanceTrait
{
     public function dependance()
    {
    	$gear = new \ObjectDesignBundle\Dependance\Gear(52, 11, 26, 1.5);
    	dump($gear->gearInches());
    	
    	//ˆø”‚ÌˆË‘¶‚ðŽæ‚èœ‚­
    	$args = [];
    	$args['chainring'] = 52;
    	$args['cog'] = 11;
    	$args['wheel'] = new Wheel(26, 1.5);
    	
    	$gear4 = new Gear4($args);    	
    	dump($gear->gearInches());
    }
}
