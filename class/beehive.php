<?php

require_once __DIR__ . '/entity.php';

/**
*
* Beehive class representing a single colony
* Associated to an Apiary and keeping track of
* all operation executed on itself
*
**/
class Beehive extends Entity
{
	private $_inspections;
	private $_collections;
	
	private $_queen_year;
	private $_type;

	public function SaveEntity($post)
	{
		$success = false;

		// Keeping the apiary_id in memory before sending data to the parent method
		$apiary_id = $_POST['apiary_id'];
		unset($post['apiary_id']);		

		$success = parent::SaveEntity($post, 'beehive');

		if ($this->_id != null)
		{
			$apiary = ApiaryFactory::FindById($apiary_id);
			$apiary->ownBeehive[] = BeehiveFactory::FindById($this->_id);
			
			//TODO: See what we do with saving functionalities
			//$saved_apiary_id = ApiaryFactory::Save($apiary);
			$saved_apiary_id = R::store($apiary);

			if (isset($this->_id) && isset($saved_apiary_id))
			{
				$success = true;
			}
		}

		return $success;
	}		
}

?>
