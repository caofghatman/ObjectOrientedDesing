<?php
namespace ObjectDesignBundle\Controller;


trait SingleResponsibilityPrincipleTrait
{
    private function singleResponsibilityPrinciple()
    {
    	/**
    	 * 歯数が52のチェーンリングと、11のコグを組み合わせて作られるギアの比は、4.73
    	 * 一度こぐたびに、車輪は5回転します。
    	 */
    	$chainring = 52;
    	$cog = 11;
    	$ratio = $chainring / $cog;
    	dump($ratio);
    	
    	/**
    	 * 歯数が30のチェーンリングと、27のコグを組み合わせて作られるギアの比は、4.73
    	 * 一度こぐたびに、車輪は1回転します。
    	 */
    	$chainring = 30;
    	$cog = 27;
    	$ratio = $chainring / $cog;
    	dump($ratio);
    	 
    	/**
    	 * クラスとする
    	 */
    	$gear1 = new Gear(52, 11);
    	dump($gear1->ratio());

    	$gear1 = new Gear(30, 27);
    	dump($gear1->ratio());

    	/**
    	 * $rimと、$tireの追加
    	 */
    	$gear2 = new Gear2(52, 11, 26, 4.5);
    	dump($gear2->gearInches());
    	
    	$gear2 = new Gear2(52, 11, 24, 1.25);
    	dump($gear2->gearInches());
    	
    	/**
    	 * $rimと、$tireを、 Wheelクラスに隔離する
    	 */
    	$wheel = new Wheel(26, 1.5);
    	$gear3 = new Gear3(52, 11, $wheel);
    	dump($gear3->gearInches());
    	dump($gear3->ratio());
    }
}
