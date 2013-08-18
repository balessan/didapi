<?php
Class User {
	//Fondamental attributes of a user
	private $_username;
	private $_name;
	private $_firstname;
	private $_is_admin;
	private $_id;

	public function __construct($username, $firstname, $name, $is_admin, $user_id)	
	{
		$this->_username  = $username;
		$this->_firstname = $firstname;
		$this->_name      = $name;
		$this->_is_admin  = $is_admin;
		$this->_id        = $user_id;
	}

	public function IsAdmin()
	{
		return $this->_is_admin;
	}
	
	public function SetId($id)
	{
		if ($this->_id != $id)
		{
			$this->_id = $id;
		}
	}
	
	public function SetName($name)
	{
		if ($this->_name != $name)
		{
			$this->_name = $name; 
		}
	}
	
	public function GetName()
	{
		return $this->_name;
	}

	public function SetFirstname($firstname)
	{
		if ($this->_firstname != $firstname)
		{
			$this->_firstname = $firstname; 
		}
	}

	public function SetUsername($username)
	{	
		if ($this->_username != $username)
		{
			$this->_username = $username; 
		}
	}

	public function SetRights($is_admin)
	{
		if ($this->_is_admin != $is_admin)
		{
			$this->_is_admin = $is_admin; 
		}
	}
}

?>
