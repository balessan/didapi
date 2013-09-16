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
		$allBeehives = Database::FindAllByAssociatedId('beehive', 'apiary_id = :apiary_id', array(':apiary_id' => $apiary_id));
		
		return $allBeehives;
	}

	public static function FindById($id)
	{
		return parent::FindById('beehive', $id);	
	}
}

?>
