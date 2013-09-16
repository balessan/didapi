<?php
	include_once('../../globals.php');
	
	$response = array();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	  // if form has been posted process data

	  $beehive = new Beehive();
	  // always return true if you save the contact data ok or false if it fails
	  $response['status'] = $beehive->Save($_POST) ? 'success' : 'error';
	  $response['message'] = $response['status']
		  ? 'La ruche a bien été créée!'
		  : 'Il y a eu un problème lors de la création de la ruche.';

	  header('Content-type: application/json');
	  echo json_encode($response);
	  exit;
	}
?>
