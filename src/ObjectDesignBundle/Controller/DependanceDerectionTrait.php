<?php
namespace ObjectDesignBundle\Controller;

use ObjectDesignBundle\DependanceDirection\Wheel;
trait DependanceDirectionTrait
{
     public function dependanceDirection()
    {
    	$wheel = new Wheel(26, 1.5, 52, 11);

    	/**
    	 * �ԗփN���X���A�M�A�C���`���b�Z�[�W�𑗐M����B
    	 * @sample $gear->gearInches()
    	 */
    	$wheel->gearInches();
    }
}
