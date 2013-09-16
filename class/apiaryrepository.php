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
		return parent::FindAll('apiary');
	}

	public static function FindById($id)
	{
		return parent::FindById('apiary', $id);
	}
}

?>
