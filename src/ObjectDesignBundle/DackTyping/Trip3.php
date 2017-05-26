<?php
namespace ObjectDesignBundle\DackTyping;

class Trip3
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

	public function __construct(array $bicycles, array $customer, array $vehicle)
	{
		
	}
	
	/**
	 * @param array $prepares
	 */
	public function prepare(array $prepares)
	{
		foreach($prepares as $prepare)
		{
			assert($prepare instanceof PreparerInterface);
			
			$prepare->prepareTrip($this);
		}
	}
}
