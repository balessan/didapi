<?php 

/**
*
* Beehive Factory implementation, allowing to retrieve beehive 
* from its associated apiary.
*
**/
class BeehiveRepository extends EntityRepository
{
	public static function FindByApiary($apiary_id)
	{
		$entities = Database::FindAllByAssociatedId('beehive', 'apiary_id = :apiary_id', array(':apiary_id' => $apiary_id));
		
		foreach ($entities as $entity)
		{
			self::$_entities[] = new Beehive($entity->id, $entity->name);
		}

		return self::$_entities;
	}

	public static function FindById($id)
	{
		return parent::FindById('beehive', $id);	
	}
}

?>
