<?php
	include_once('../class/user.php');
	include_once('../globals.php');	

	if (!isset($_SESSION)) session_start();

	$currentUser = new User($_SESSION['username'], $_SESSION['firstname'], $_SESSION['name'], $_SESSION['is_admin'], $_SESSION['user_id']);
		
	if (!$currentUser->IsAdmin())
	{
		header("location: /index.php");
	}
	else
	{
		include($include_path . 'header.php');
	}
?>
