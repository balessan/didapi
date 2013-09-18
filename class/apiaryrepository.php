<?php

require_once __DIR__ . '/entityrepository.php';
/**
*
* First override of my Repository base class
* To provide corresponding Apiary to associated Beehives.
*
**/
class ApiaryRepository extends EntityRepository
{
	public static function FindAll()
	{
		$entities = Database::FindAll('apiary', '');

		foreach ($entities as $entity)
		{
			self::$_entities[] = new Apiary($entity->id, $entity->name, $entity->location, $entity->beehives);
		}

		return self::$_entities;
	}

	public static function FindById($id)
	{
		return parent::FindById('apiary', $id);
	}
}

?>
