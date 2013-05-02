<?php 
	//include('./validate_rights.php');
	
	if(isset($_SESSION['username']) && (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true)
	{
		include('../header.php');	
	}
	else
	{
		echo('403 Forbiddent ! YOU DO NOT HAVE PERMISSION TO SEE THIS PAGE !');
	}
?>