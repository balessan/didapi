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
	
	public function __construct($id, $name, $location, $beehives)
	{
		parent::__construct($id);
		$this->_name = $name;
		$this->_location = $location;
		$this->_beehives = $beehives;
	}

	public function Save($post)
	{
		$success = false;

		$success = parent::Save($post, 'apiary');

		return $success;
	}

	public function GetName()
	{
		return $this->_name;	
	}
	
	public function GetLocation()
	{
		return $this->_location;	
	}

	public function GetBeehives()
	{
		return $this->_beehives;	
	}
}

?>
