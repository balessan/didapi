<?php

require_once __DIR__ . '/../library/RedBeanORM/rb.php';	

//TODO; Work on factories to be able to populate my custom objects
// From the RedBeanORM models classes.
/**
*
* Base factory classes to provide access to proper data 
* from the RedBeanORM model classes
*
**/
class EntityFactory
{
	private static $_entities;

	public static function FindAll($entityName)
	{
		//TO be improved to add caching on Entities
		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
	
		if (self::$_entities == null || empty(self::$_entities)) {
			self::$_entities = R::findAll($entityName, '');
		}

		return self::$_entities;			
	}

	public static function FindById($entityName, $id)
	{
		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
		
		$entity = R::load($entityName, $id);
	
		return $entity; 	
	}
}

?>
