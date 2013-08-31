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
		'rucher_id' => convertAsSafeString($_POST['rucher_id'])
	  );

	  // always return true if you save the contact data ok or false if it fails
	  $response['status'] = saveRuche($data) ? 'success' : 'error';
	  $response['message'] = $response['status']
		  ? utf8_decode('La ruche a bien été créée!')
		  : utf8_decode('Il y a eu un problème lors de la création de la ruche.');

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
	
	function saveRuche($data)
	{
		$success = false;

		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
		
		$ruche = R::dispense('ruche');
		$ruche->name = utf8_encode($data['name']);
		$ruche_id = R::store($ruche);
		
		$rucher = R::load('rucher', $data['rucher_id']);
		
		if ($rucher->id)
		{
			$rucher->ownRuche[] = $ruche;
			$saved_rucher_id = R::store($rucher);
			
			if (isset($ruche_id) && isset($saved_rucher_id))
			{
				$success = true;
			}
		}

		return $success;
	}
?>
