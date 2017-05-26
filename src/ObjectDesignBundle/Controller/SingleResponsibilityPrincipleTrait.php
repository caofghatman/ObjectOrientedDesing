<?php
namespace ObjectDesignBundle\Controller;


trait SingleResponsibilityPrincipleTrait
{
    private function singleResponsibilityPrinciple()
    {
    	/**
    	 * ������52�̃`�F�[�������O�ƁA11�̃R�O��g�ݍ��킹�č����M�A�̔�́A4.73
    	 * ��x�������тɁA�ԗւ�5��]���܂��B
    	 */
    	$chainring = 52;
    	$cog = 11;
    	$ratio = $chainring / $cog;
    	dump($ratio);
    	
    	/**
    	 * ������30�̃`�F�[�������O�ƁA27�̃R�O��g�ݍ��킹�č����M�A�̔�́A4.73
    	 * ��x�������тɁA�ԗւ�1��]���܂��B
    	 */
    	$chainring = 30;
    	$cog = 27;
    	$ratio = $chainring / $cog;
    	dump($ratio);
    	 
    	/**
    	 * �N���X�Ƃ���
    	 */
    	$gear1 = new Gear(52, 11);
    	dump($gear1->ratio());

    	$gear1 = new Gear(30, 27);
    	dump($gear1->ratio());

    	/**
    	 * $rim�ƁA$tire�̒ǉ�
    	 */
    	$gear2 = new Gear2(52, 11, 26, 4.5);
    	dump($gear2->gearInches());
    	
    	$gear2 = new Gear2(52, 11, 24, 1.25);
    	dump($gear2->gearInches());
    	
    	/**
    	 * $rim�ƁA$tire���A Wheel�N���X�Ɋu������
    	 */
    	$wheel = new Wheel(26, 1.5);
    	$gear3 = new Gear3(52, 11, $wheel);
    	dump($gear3->gearInches());
    	dump($gear3->ratio());
    }
}
