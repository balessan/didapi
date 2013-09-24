<?php
	include_once('../../../globals.php');
	$response = array();
		
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	  // if form has been posted process data

	  // you dont need the addContact function you jsut need to put it in a new array
	  // and it doesnt make sense in this context so jsut do it here
	  // then used json_decode and json_decode to read/save your json in
	  // saveContact()
	  $data = array(
		'date' 		 => convertAsSafeString($_POST['recolte-date']),
		'type_miel' 	 => convertAsSafeString($_POST['recolte-type']),
		'nombre_hausses' => convertAsSafeString($_POST['recolte-hausse']),
		'ruche_id' 	 => convertAsSafeString($_POST['recolte-ruche-id'])
	  );
	  
	  // always return true if you save the contact data ok or false if it fails
	  $response['status'] = saveRecolte($data) ? 'success' : 'error';
	  $response['message'] = $response['status']
		  ? 'La récolte a bien été enregistrée!'
		  : 'Il y a eu un problème lors de l\'enregistrement de la récolte.';

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
	
	function saveRecolte($data)
	{
		$success = false;

		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
		
		$recolte = R::dispense('recolte');
		$recolte->date = $data['date'];
		$recolte->type_miel = $data['type_miel'];
		$recolte->nombre_hausses = $data['nombre_hausses'];
		$recolte_id = R::store($recolte);
		
		$ruche = R::load('ruche', $data['ruche_id']);
		
		if ($ruche->id)
		{
			$ruche->ownRecolte[] = $recolte;
			$saved_ruche_id = R::store($ruche);
			
			if (isset($recolte_id) && isset($saved_ruche_id))
			{
				$success = true;
			}
		}

		return $success;
	}
?>
