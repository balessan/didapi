<?php

require_once __DIR__ . '/../library/RedBeanORM/rb.php';	
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
	protected $_entities;

	// Base Method to be used for saving to Database purpose
	public function SaveEntity($post, $entityName) {
		$success = false;

		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);

		$this->_entity = R::dispense($entityName);

		foreach($post as $key)
		{
			if (isset($_POST[$key]))
			{
				$this->_entity->setAttr($key, Utility::ConvertAsSafeString($_POST[$key]));
			}
		}

		$this->_id = R::store($this->_entity);
		
		if ($this->_id != null)
		{
			$success = true;
		}

		return $success;
	}
	
	// Base method for retrieving all entities of a certain type
	public function GetAllEntities($entityName)
	{
		//TO be improved to add caching on Entities
		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
	
		if ($this->_entities == null || empty($this->_entities)) {
			$this->_entities = R::findAll($entityName, '');
		}

		return $this->_entities;			
	}
}

?>
