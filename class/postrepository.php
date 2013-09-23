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
		$entities = Database::FindAll('post');

		foreach ($entities as $entity)
		{
			self::$_entities[] = new Post($entity->id, $entity->title, $entity->content, $entity->date, $entity->user_id);
		}

		return self::$_entities;
	}

	public static function FindById($id)
	{
		$redBeanEntity = parent::FindById('post', $id);
	
		$entity = new Post($redBeanEntity->id, $redBeanEntity->title, $redBeanEntity->content, $redBeanEntity->date, $redBeanEntity->user_id);

		return $entity;
	}
}

?>
