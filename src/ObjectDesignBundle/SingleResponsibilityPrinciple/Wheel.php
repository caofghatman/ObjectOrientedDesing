<?php
namespace ObjectDesignBundle\SingleResponsibilityPrinciple;

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
	 * @param int $rim
	 * @param int $tire
	 */
	public function __construct($rim, $tire)
	{
		$this->rim = $rim;
		$this->tire = $tire;
	}

	/**
	 * @return decimal�@
	 * �ԗւ̒��a = �����̒��a + �^�C���̌��݂�2�{�Ƃ���B
	 */
	public function diameter()
	{
		return $this->rim + ($this->tire * 2);
	}
	
	/**
	 * @return decimal
	 */
	public function circumference()
	{
		return $this->diameter() * 1.34;
	}
}
