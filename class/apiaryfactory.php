<?php

require_once __DIR__ . '/entityfactory.php';
/**
*
* First override of my Factory base class
* To provide corresponding Apiary to associated Beehives.
*
**/
class ApiaryFactory extends EntityFactory
{
	public static function FindAll()
	{
		return parent::FindAll('apiary');
	}

	public static function FindById($id)
	{
		return parent::FindById('apiary', $id);
	}
}


?>
