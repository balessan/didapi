<?php

/**
*
* Contact repository class, allowing to retrieve and play
* with contact messages.
*
**/
class ContactRepository extends EntityRepository
{
	public static function FindAll()
	{
		$entities = Database::FindAll('contact');

		foreach($entities as $entity)
		{
			self::$_entities[] = new Contact($entity->id, $entity->name, $entity->firstname, $entity->email, $entity->phone, $entity->comment);
		}

		return self::$_entities;
	}
}

?>
