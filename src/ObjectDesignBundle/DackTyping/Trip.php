<?php
namespace ObjectDesignBundle\DackTyping;

class Trip
{
	/**
	 * @var array
	 */
	private $bicycles;
	
	/**
	 * @var array
	 */
	private $customers;
	
	/**
	 * @var array
	 */
	private $vehicle;

	/**
	 * @param Mechanic $mechanic
	 */
	public function prepare(Mechanic $mechanic)
	{
		$mechanic->prepareBicycles($this->bicycles);
	}
}
