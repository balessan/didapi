<?php

require_once __DIR__ . '/../library/RedBeanORM/rb.php';	
require_once __DIR__ . '/utility.php';	

/**
*
* Database class used to query the RedBean ORM for objects
* in a unique class.
* Copyright Benoît ALESSANDRONI
*
**/
class Database
{
	const NAME     = 'didapi';
	const PASSWORD = '';
	const HOST     = 'localhost';
	const USERNAME = 'root';
	
	public static function Connect()
	{
		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
	}

	public static function Close()
	{
		R::close();
	}

	public static function FindAll($entityName)
	{	
		self::Connect();

		$entities = R::findAll($entityName, '');

		self::Close();	
	
		return $entities;
	}

	public static function FindById($entityName, $id)
	{
		self::Connect();
		
		$entity = R::load($entityName, $id);

		self::Close();

		return $entity;
	}

	public static function Save($entity, $post = null, $entityName = null)
	{
		$result = false;

		if (null == $post && null == $entityName)
		{
			$result = self::SaveEntity($entity);
		}
		else
		{
			$result = self::SaveWithAttributes($post, $entityName);
		}
		
		return $result;
	}

	private static function SaveEntity($entity)
	{
		$saved_id = false;

		self::Connect();		

		$saved_id = R::store($entity);

		self::Close();

		return $saved_id;
	}

	private static function SaveWithAttributes($post, $entityName)
	{
		$success = false;

		self::Connect();

		$entity = R::dispense($entityName);
		
		$entity = self::SetAttributes($entity, $post);		

		$id = R::store($entity);
		
		if ($id != null)
		{
			$success = true;
		}

		self::Close();
		
		return $success == true ? array('entity' => $entity, 'entity_id' => $id) : false;
	}

	public static function FindAllByAssociatedId($entityName, $selectorsName, $selectorsValue)
	{
		$allEntities = false;

		self::Connect();

		$allEntities = R::find($entityName, $selectorsName, $selectorsValue);

		self::Close();
		
		return $allEntities != false ? $allEntities : false;
	}

	protected static function SetAttributes($entity, $post)
	{
		foreach($post as $key => $value)
		{
			if (isset($value) && isset($key) && !empty($value) && !empty($key))
			{
				$entity->setAttr($key, Utility::ConvertAsSafeString($value));
			}
		}

		return $entity;
	}
	
}

?>
