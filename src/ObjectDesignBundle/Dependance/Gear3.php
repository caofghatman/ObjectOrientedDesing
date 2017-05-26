<?php
namespace ObjectDesignBundle\Dependance;

/**
 * 
 * @author masaaki
 * 
 * @category
 * 外部メッセージの隔離
 */

class Gear3
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
	 * @var Wheel
	 */
	private $wheel;

	/**
	 * @param int $chainring
	 * @param int $cog
	 * @param Wheel $wheel
	 */
	public function __construct($chainring, $cog, Wheel $wheel)
	{
		$this->chainring = $chainring;
		$this->cog = $cog;
		$this->wheel = $wheel;
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
		return $this->ratio() * $this->diameter;
	}
	
	/**
	 * @reurn int
	 */
	private function diameter()
	{
		return $this->wheel->diameter();
	}
}
