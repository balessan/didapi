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
		return parent::FindAll('contact');
	}
}

?>
