<?php
	include_once('../../../globals.php');
			
	require_once('../../../library/RedBeanORM/rb.php');
	$response = array();
		
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	  // if form has been posted process data

	  // you dont need the addContact function you jsut need to put it in a new array
	  // and it doesnt make sense in this context so jsut do it here
	  // then used json_decode and json_decode to read/save your json in
	  // saveContact()
	  $data = array(
		'date' 		 	 => convertAsSafeString($_POST['controle-date']),
		'nombre_cadres_couvains' => convertAsSafeString($_POST['controle-couvains']),
		'traitement' 		 => convertAsSafeString($_POST['controle-traitement']),
		'traitement_type' 	 => convertAsSafeString($_POST['controle-traitement-type']),
		'nourrissement' 	 => convertAsSafeString($_POST['controle-nourrissement']),
		'nourrissement_quantite' => convertAsSafeString($_POST['controle-nourrissement-quantite']),
		'ruche_id' => convertAsSafeString($_POST['controle-ruche-id'])
	  );
	  
	  // always return true if you save the contact data ok or false if it fails
	  $response['status'] = saveControle($data) ? 'success' : 'error';
	  $response['message'] = $response['status']
		  ? 'Le contrôle a bien été enregistré!'
		  : 'Il y a eu un problème lors de l\'enregistrement du dernier contrôle.';

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
	
	function saveControle($data)
	{
		$success = false;

		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
		
		$controle = R::dispense('controle');

		$controle->date = $data['date'];
		$controle->traitement = $data['traitement'] == "true" ? 1 : 0;
		if ($controle->traitement)
		{
			$controle->traitement_type = $data['traitement_type'];
		}

		$controle->nourrissement = $data['nourrissement'] == "true" ? 1 : 0;
		if ($controle->nourrissement)
		{
			$controle->nourrissement_quantite = $data['nourrissement_quantite'];
		}
		 
		$controle->nombre_cadres_couvains = $data['nombre_cadres_couvains'];
		$controle_id = R::store($controle);
		
		$ruche = R::load('ruche', $data['ruche_id']);
		
		if ($ruche->id)
		{
			$ruche->ownControle[] = $controle;
			$saved_ruche_id = R::store($ruche);
			
			if (isset($controle_id) && isset($saved_ruche_id))
			{
				$success = true;
			}
		}

		return $success;
	}
?>
