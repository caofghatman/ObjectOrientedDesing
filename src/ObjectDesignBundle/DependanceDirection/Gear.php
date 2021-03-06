<?php
namespace ObjectDesignBundle\DependanceDirection;

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
	 * @param int $chainring
	 * @param int $cog
	 */
	public function __construct($chainring, $cog)
	{
		$this->chainring = $chainring;
		$this->cog = $cog;
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
	public function gearInches($diameter)
	{
		return $this->ratio() * $diameter;
	}
}
