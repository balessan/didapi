<?php
	if (!isset($_SESSION)) { session_start(); }
	 
	require('../library/RedBeanORM/rb.php');
	require_once('../class/user.php');
	
	$response = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		// always return true if you save the contact data ok or false if it fails
		$response['status'] = loginUser() ? 'success' : 'error';
		$response['message'] = $response['status']
			? 'Bienvenue ' . $_POST['username'] . '!'
			: 'Il y a eu un probleme lors de la creation du user.';
			
		header('Content-type: application/json');
		echo json_encode($response);
		exit;
	}

	// Method used to log on the user based on username and password provided.
	function loginUser()
	{
		$success = false;
		$user = null;
		
		R::setup('mysql:host=localhost;
			dbname=didapibs','root','');
			
		echo hash('sha256', $_POST['password']);
		
		$user = R::findOne('user', ' username = :username AND password = :password LIMIT 1', 
				array( 	':username'=>$_POST['username'], 
						':password'=> hash('sha256', $_POST['password'] ))
		);
		//$user = $user[0];
		echo $user['name'];
		echo $user->name;
		
		if (isset($user))
		{
			$currentUser = new User($user->username, $user->name, $user->firstname, $user->is_admin);
			echo $user->username;
			echo $user->name;
			
			$_SESSION['username']  = $user->username;
			$_SESSION['is_admin']  = $user->is_admin;
			$_SESSION['name']      = $user->name;
			$_SESSION['firstname'] = $user->firstname;
			
			$success = true;
		}
		
		return $success;
	}
?>
