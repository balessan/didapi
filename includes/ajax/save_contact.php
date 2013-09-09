<?php
	require_once('Mail.php');
	include_once('../../globals.php');	
	
	$response = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	  // if form has been posted process data

	  //Instanciates new Contact entity to be able to use the save capability of this object
	  $post = array('name', 'firstname', 'email', 'phone', 'comment');
	  $contact = new Contact();
	  
	  // always return true if you save the contact data ok or false if it fails
	  $response['status'] = $contact->SaveEntity($post) ? 'success' : 'error';
	  $response['message'] = $response['status']
		  ? utf8_decode('Votre message a bien été sauvegardé!')
		  : utf8_decode('Il y a eu un problème lors de la sauvegarde du message.');

	  header('Content-type: application/json');
	  echo json_encode($response);
	  exit;
	}
?>
