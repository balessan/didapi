<?php
	include_once('../../globals.php');
	$response = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		// always return true if you save the contact data ok or false if it fails
		$response['status'] = createUser() ? 'success' : 'error';
		$response['message'] = $response['status']
			? 'Le user a bien ete cree, ou existait deja!'
			: 'Il y a eu un probleme lors de la creation du user.';
			
		header('Content-type: application/json');
		echo json_encode($response);
		exit;
	}
	
	// Method used to create an administrator quickly using RedBeanORM possibilities.
	function createUser()
	{
		$success = false;
		
		RedBean_Facade::setup('mysql:host=localhost;
			dbname=didapi','root','');
		
	//$user = R::find('user', ' username = ?', array( 'admin') );
		
	//	if (!isset($user))
	//	{
			$user = RedBean_Facade::dispense('user');
			
			$user->username = 'admin';
			$user->name = 'Admin';
			$user->firstname = 'Admin';
			$user->is_admin = true;
			$user->password = hash('sha256', 'Di8Ap1');
			
			$id = RedBean_Facade::store($user);
			
			if ($id != null)
			{
				$success = true;
			}
	//	}
	//	else
	//	{
	//		$success = false;
	//	}
		
		return $success;
	}
?>
