<?php
namespace ObjectDesignBundle\SingleResponsibilityPrinciple;

class Gear2
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
		return $this->ratio() * ($this->rim + ($this->tire * 2));
	}
}
