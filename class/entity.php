<?php

require_once __DIR__ . '/database.php';

/**
*
* Entity: Base class of all objects stored in the database I will use 
* in this project. 
* Mapped to database by RedBeanPHP ORM.
*
**/

class Entity {
	protected $_id;
	protected $_entity;
	
	public function __construct($id)
	{
		$this->_id = $id;
	}

	//Base method to use to save an entity in the database
	public function Save($post = null, $entityName = null)
	{
		if (null == $post && null == $entityName)
		{
			$this->SaveEntity();
		}
		else
		{
			$success = $this->SaveWithParameters($post, $entityName);
			return $success;
		}
	}

	private function SaveEntity()
	{
		if (isset($this->_entity))
		{
			Database::Save($this->_entity);
		}		
	}

	public function Update($entityName, $data)
	{
		$success = false;

		if (isset($data) && !empty($data))
		{
			$success = Database::Update($entityName, $this->_id, $data);
		}

		return $success;
	}
	
	public function toArray()
	{
		$result = array();

		foreach($this as $property => $value)
		{
			$property = trim($property, '_');
			$result[$property] = $value;
		}

		return $result;
	}

	// Base Method to be used for saving to Database purpose
	private function SaveWithParameters($post, $entityName) 
	{
		$success = false;

		$result = Database::Save(null, $post, $entityName);

		echo $result;
		
		if (isset($result) && !empty($result))
		{
			$this->_entity = $result['entity'];
			$this->_id = $result['entity_id'];

			if (isset($this->_entity) && isset($this->_id))
			{
				$success = true;
				echo $success;
			}
		}

		return $success;
	}

	public function GetId()
	{
		return $this->_id;
	}
}

?>

