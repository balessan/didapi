<?php 

/**
*
* Beehive Factory implementation, allowing to retrieve beehive 
* from its associated apiary.
*
**/
class BeehiveFactory extends EntityFactory
{
	public static function FindByApiary($apiary_id)
	{
		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
		
		$allBeehives = R::find('beehive', ' apiary_id = :apiary_id', array(':apiary_id' => $apiary_id));
		
		return $allBeehives;
	}

	public static function FindById($id)
	{
		return parent::FindById('beehive', $id);	
	}
}

?>
