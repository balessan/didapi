<?php

/**
*
* Posts Repository used to retrieve posts by differents manners
* Copyright Benoît ALESSANDRONI
*
**/
class PostRepository extends EntityRepository
{
	public static function FindAll()
	{
		$entities = Database::FindAll('post', '');

		foreach ($entities as $entity)
		{
			self::$_entities[] = new Post($entity->id, $entity->title, $entity->content, $entity->date, $entity->user_id);
		}

		return self::$_entities;
	}
}

?>
