<?php

require_once __DIR__ . '/entity.php';

/**
*
* Rucher class designed to handle all operation related to rucher
*
**/
class Apiary extends Entity
{
	private $_beehives;
	private $_name;
	private $_location;
	
	public function SaveEntity($post)
	{
		$success = false;

		$success = parent::SaveEntity($post, 'apiary');

		return $success;
	}
}

?>
