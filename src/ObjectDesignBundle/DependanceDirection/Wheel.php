<?php
namespace ObjectDesignBundle\DependanceDirection;

class Wheel
{
	/**
	 * @var int
	 */
	private $rim;

	/**
	 * @var int
	 */
	private $tire;
	
	/**
	 * @var Gear
	 */
	private $gear;

	/**
	 * @param int $rim
	 * @param int $tire
	 * @param int $chainring
	 * @param int $cog
	 */
	public function __construct($rim, $tire, $chainring, $cog)
	{
		$this->rim = $rim;
		$this->tire = $tire;
		$this->gear = new Gear($chainring, $cog);
	}

	/**
	 * @return decimal@
	 * ŽÔ—Ö‚Ì’¼Œa = ƒŠƒ€‚Ì’¼Œa + ƒ^ƒCƒ„‚ÌŒú‚Ý‚Ì2”{‚Æ‚·‚éB
	 */
	public function diameter()
	{
		return $this->rim + ($this->tire * 2);
	}
	
	public function gearInches()
	{
		return $this->gear->gearInches($this->diameter());
	}
}
