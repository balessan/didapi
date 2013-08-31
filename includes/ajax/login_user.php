<?php
	include_once('../../class/user.php');
	include_once('../../globals.php');
	
	if (!isset($_SESSION)) { session_start(); }
	
	require('../../library/RedBeanORM/rb.php');
	
	$response = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// always return true if you save the contact data ok or false if it fails
		$response['status'] = loginUser() ? 'success' : 'error';
		$response['message'] = $response['status']
			? 'Bienvenue ' . $_POST['username'] . '!'
			: 'Il y a eu un probleme lors de la connexion du user.';
			
		header('Content-type: application/json');
		echo json_encode($response);
		exit;
	}

	// Method used to log on the user based on username and password provided.
	function loginUser()
	{
		$success = false;
		
		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
			
		//echo hash('sha256', $_POST['password']);
		
		$user = R::findOne('user', ' username = :username AND password = :password LIMIT 1', 
				array( 	':username'=>$_POST['username'], 
						':password'=> hash('sha256', $_POST['password'] ))
		);
		
		if (isset($user))
		{
			$currentUser = new User($user["username"], $user["firstname"], $user["name"], $user["is_admin"], $user["id"]);
			
			$_SESSION['username'] = $user["username"];
			$_SESSION['user_id'] = $user["id"];
			$_SESSION['name'] = $user["name"];
			$_SESSION['firstname'] = $user["firstname"];
			$_SESSION['is_admin'] = $user["is_admin"];

			$success = true;
		}

		return $success;
	}
?>
