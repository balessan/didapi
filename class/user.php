<?php

	class User
	{
		//Fondamental attributes of a user
		private $username;
		private $name;
		private $firstname;
		private $is_admin;
		private $address;
		
		//Public getter and setter to access attributes of current user
		public function __construct($username, $name, $firstname, $id_admin)
		{
			$this->username = $username;
			$this->name = $name;
			$this->firstname = $firstname;
			$this->id_admin = $id_admin;
		}
		
	}
	
?>