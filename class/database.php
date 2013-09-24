<?php

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
	
	public static function FindAll($entityName)
	{	
		self::Connect();

		$entities = RedBean_Facade::findAll($entityName, '');

		self::Close();	
	
		return $entities;
	}

	public static function FindById($entityName, $id)
	{
		self::Connect();
		
		$entity = RedBean_Facade::load($entityName, $id);

		self::Close();

		return $entity;
	}

	public static function Update($entityName, $id, $data)
	{
		$entity = self::FindById($entityName, $id);

		$entity = self::SetAttributes($entity, $data);		

		$success = self::Store($entity);
		
		self::Close();
		
		return $success == true ? array('entity' => $entity, 'entity_id' => $id) : false;
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

	public static function FindAllByAssociatedId($entityName, $selectorsName, $selectorsValue)
	{
		$allEntities = false;

		self::Connect();

		$allEntities = RedBean_Facade::find($entityName, $selectorsName, $selectorsValue);

		self::Close();
		
		return $allEntities != false ? $allEntities : false;
	}

	private static function SaveEntity($entity)
	{
		$saved_id = false;

		self::Connect();		

		$saved_id = RedBean_Facade::store($entity);

		self::Close();

		return $saved_id;
	}

	private static function SaveWithAttributes($post, $entityName)
	{
		$success = false;

		self::Connect();

		$entity = RedBean_Facade::dispense($entityName);
		
		$entity = self::SetAttributes($entity, $post);		

		$success = self::Store($entity);
		echo $success;	
		self::Close();
		
		return $success == true ? array('entity' => $entity, 'entity_id' => $id) : false;
	}

	protected static function Connect()
	{
		RedBean_Facade::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
	}

	protected static function Close()
	{
		RedBean_Facade::close();
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

	protected static function Store($entity)
	{
		$id = RedBean_Facade::store($entity);
		
		if ($id != null)
		{
			$success = true;
		}
	}
	
}

?>
