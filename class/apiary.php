<?php

require_once __DIR__ . '/entity.php';

/**
*
* Apiary class designed to handle all operation related to the apiary
*
**/
class Apiary extends Entity
{
	private $_beehives;
	private $_name;
	private $_location;
	
	public function Save($post)
	{
		$success = false;

		$success = parent::Save($post, 'apiary');

		return $success;
	}
}

?>
