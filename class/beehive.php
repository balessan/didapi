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
	private $_name;

	public function __construct($id, $name, $queen_year = null, $type = null)
	{
		parent::__construct($id);
		$this->_name = $name;
		if (isset($queen_year)) $this->_queen_year = $queen_year;
		if (isset($type)) $this->_type = $type;
	}

	public function Save($post)
	{
		$success = false;

		// Keeping the apiary_id in memory before sending data to the parent method
		$apiary_id = $post['apiary_id'];
		unset($post['apiary_id']);		

		$success = parent::Save($post, 'beehive');

		if ($this->_id != null)
		{
			$apiary = ApiaryRepository::FindById($apiary_id);
			
			$apiary->ownBeehive[] = $this->_entity;
			
			//TODO: See what we do with saving functionalities
			//$saved_apiary_id = ApiaryFactory::Save($apiary);
			$saved_apiary_id = Database::Save($apiary);

			if (isset($this->_id) && isset($saved_apiary_id))
			{
				$success = true;
			}
		}

		return $success;
	}		
}

?>
