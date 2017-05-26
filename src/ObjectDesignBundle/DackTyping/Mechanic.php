<?php
namespace ObjectDesignBundle\DackTyping;

class Mechanic
{
	/**
	 * @param array $bicycles
	 */
	public function prepareBicycles(array $bicycles)
	{
		foreach($bicycles as $bicycle)
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
