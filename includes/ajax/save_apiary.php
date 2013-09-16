<?php
	include_once('../../globals.php');
	
	$response = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	  // if form has been posted process data
	  
	  $apiary = new Apiary();
	  // always return true if you save the contact data ok or false if it fails
	  $response['status'] = $apiary->Save($_POST) ? 'success' : 'error';
	  $response['message'] = $response['status']
		  ? 'Le rucher a bien été créé!'
		  : 'Il y a eu un problème lors de la création du rucher.';

	  header('Content-type: application/json');
	  echo json_encode($response);
	  exit;
	}
?>
