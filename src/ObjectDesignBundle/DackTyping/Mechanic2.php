<?php
namespace ObjectDesignBundle\DackTyping;

class Mechanic2 implements PreparerInterface
{
	public function prepareTrip(Trip3 $trip)
	{
		foreach($trip-> as $bicycle)
		{
			$this->prepareBicycle($bicycle);
		}
	}

	/**
	 * @param mixed $bicycle
	 */
	private function prepareBicycle($bicycle)
	{
		//.....
	}
}
