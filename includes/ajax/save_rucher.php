<?php
				
	include_once('../../globals.php');
	require_once('../../library/RedBeanORM/rb.php');
	
	$response = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	  // if form has been posted process data

	  // you dont need the addContact function you jsut need to put it in a new array
	  // and it doesnt make sense in this context so jsut do it here
	  // then used json_decode and json_decode to read/save your json in
	  // saveContact()
	  
	  $data = array(
		'name'      => convertAsSafeString($_POST['name']),
		'location'  => convertAsSafeString($_POST['location']),
	  );

	  // always return true if you save the contact data ok or false if it fails
	  $response['status'] = saveRucher($data) ? 'success' : 'error';
	  $response['message'] = $response['status']
		  ? 'Le rucher a bien ete cree!'
		  : 'Il y a eu un probleme lors de la creation du rucher.';

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
	
	function saveRucher($data)
	{
		$success = false;
		
		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
		
		$rucher = R::dispense('rucher');
		$rucher->name = $data['name'];
		$rucher->location = $data['location'];
		
		$id = R::store($rucher);
		
		if ($id != null)
		{
			$success = true;
		}
		
		return $success;
	}
?>
