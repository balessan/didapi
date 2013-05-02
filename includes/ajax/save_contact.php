<?php
		
	require('../library/RedBeanORM/rb.php');
	$response = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	  // if form has been posted process data

	  // you dont need the addContact function you jsut need to put it in a new array
	  // and it doesnt make sense in this context so jsut do it here
	  // then used json_decode and json_decode to read/save your json in
	  // saveContact()
	  
	  $data = array(
		'name'      => convertAsSafeString($_POST['name']),
		'firstname' => convertAsSafeString($_POST['firstname']),
		'email'     => convertAsSafeString($_POST['email']),
		'phone'     => convertAsSafeString($_POST['phone']),
		'comment'   => convertAsSafeString($_POST['comment'])
	  );

	  // always return true if you save the contact data ok or false if it fails
	  $response['status'] = saveContact($data) ? 'success' : 'error';
	  $response['message'] = $response['status']
		  ? 'Votre message a bien été sauvegardé!'
		  : 'Il y a eu un problème lors de la sauvegarde du message.';

	  header('Content-type: application/json');
	  echo json_encode($response);
	  exit;
	}
	
	function convertAsSafeString($string)
	{
		$result = null;
		
		if (isset($string))
		{
			$result = htmlspecialchars($string);
		}
		
		return $result;
	}
	
	function saveContact($data)
	{
		$success = false;
		
		R::setup('mysql:host=localhost;
			dbname=didapibs','root','');
		
		$contact = R::dispense('contact');
		$contact->name = $data['name'];
		$contact->firstname = $data['firstname'];
		$contact->email = $data['email'];
		$contact->phone = $data['phone'];
		$contact->comment = $data['comment'];
		
		$id = R::store($contact);
		
		if ($id != null)
		{
			$success = true;
		}
		
		return $success;
	}
?>