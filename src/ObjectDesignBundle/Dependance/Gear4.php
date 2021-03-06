<?php
namespace ObjectDesignBundle\Dependance;

/**
 * 
 * @author masaaki
 * 
 * @category
 * 引数の順番の依存を取り除く
 */

class Gear4
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
	 * @param array $args;
	 */
	public function __construct($args)
	{
		$this->chainring = $args['chainring'];
		$this->cog = $args['cog'];
		$this->wheel = $args['wheel'];
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
