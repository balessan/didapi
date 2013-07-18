<?php
	include_once('../class/user.php');
	
	if (!isset($_SESSION)) session_start();

	$currentUser = new User($_SESSION['username'], $_SESSION['firstname'], $_SESSION['name'], $_SESSION['is_admin'], $_SESSION['user_id']);
		
	if ($currentUser->IsAdmin())
	{
		include('../header.php');	
	}
	else
	{	
		header("location: http://didapi.fr/");
	}
?>
