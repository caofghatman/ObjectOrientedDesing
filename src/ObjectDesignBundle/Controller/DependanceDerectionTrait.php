<?php
namespace ObjectDesignBundle\Controller;

use ObjectDesignBundle\DependanceDirection\Wheel;
trait DependanceDirectionTrait
{
     public function dependanceDirection()
    {
    	$wheel = new Wheel(26, 1.5, 52, 11);

    	/**
    	 * 車輪クラスが、ギアインチメッセージを送信する。
    	 * @sample $gear->gearInches()
    	 */
    	$wheel->gearInches();
    }
}
