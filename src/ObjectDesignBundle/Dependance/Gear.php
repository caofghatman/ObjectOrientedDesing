<?php
namespace ObjectDesignBundle\Dependance;

use ObjectDesignBundle\SingleResponsibilityPrinciple\Wheel;

class Gear
{
	/**
	 * @var int
	 */
	private $chainring;

	/**
	 * @var int
	 */
	private $cog;

	/**
	 * @var int
	 */
	private $rim;
	
	/**
	 * @var int
	 */
	private $tire;

	/**
	 * @param int $chainring
	 * @param int $cog
	 * @param int $rim
	 * @param int $tire
	 */
	public function __construct($chainring, $cog, $rim, $tire)
	{
		$this->chainring = $chainring;
		$this->cog = $cog;
		$this->rim = $rim;
		$this->tire = $tire;
	}
	
	/**
	 * @return int
	 */
	public function ratio()
	{
		return $this->chainring / $this->cog;
	}
	
	/**
	 * @return int
	 */
	public function gearInches()
	{
		$wheel = new Wheel($this->rim, $this->tire);
		return $this->ratio() * $wheel->diameter();
	}
}
