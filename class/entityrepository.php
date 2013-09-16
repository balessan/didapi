<?php


//TODO; Work on repositories to be able to populate my custom objects
// From the RedBeanORM models classes.
/**
*
* Base repository classes to provide access to proper data 
* from the RedBeanORM model classes
*
**/
class EntityRepository
{
	private static $_entities;

	public static function FindAll($entityName)
	{
		//TO be improved to add caching on Entities
		if (self::$_entities == null || empty(self::$_entities)) {
			self::$_entities = Database::FindAll($entityName, '');
		}

		return self::$_entities;			
	}

	public static function FindById($entityName, $id)
	{
		$entity = Database::FindById($entityName, $id);
	
		return $entity; 	
	}
}

?>
