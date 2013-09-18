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
	protected static $_entities;

	public static function FindAll($entityName)
	{
		//TO be improved to add caching on Entities
		$entities = Database::FindAll($entityName, '');
		
		foreach ($entities as $entity)
		{
			self::$_entities[] = new Entity($entity->id);
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
