<?php
namespace ObjectDesignBundle\DackTyping;

class Trip2
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
	 * @param array $prepares
	 */
	public function prepare(array $prepares)
	{
		foreach($prepares as $prepare)
		{
			if($prepare instanceof Mechanic)
			{
				$prepare->prepareBicycles($this->bicycles);
				
			}
			elseif($prepare instanceof TripCoordinator)
			{
				$prepare->buyFood($this->customers);
			}
			elseif($prepare instanceof Driver)
			{
				$prepare->gasUp($this->vehicle);
				$prepare->fillWaterTank($this->vehicle);
			}
		}
	}
}
