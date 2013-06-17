<?php
		
	require('../../library/RedBeanORM/rb.php');
	$response = array();
	
	$rucher_id = $GET['rucher_id'];

	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($rucher_id)) {
	  // if form has been posted process data

	  // you dont need the addContact function you jsut need to put it in a new array
	  // and it doesnt make sense in this context so jsut do it here
	  // then used json_decode and json_decode to read/save your json in
	  // saveContact()
	  
	  $data = array(
		'name'      => convertAsSafeString($_POST['name']),
		'rucher_id' => convertAsSafeString($rucher_id)
	  );

	  // always return true if you save the contact data ok or false if it fails
	  $response['status'] = saveRuche($data) ? 'success' : 'error';
	  $response['message'] = $response['status']
		  ? 'La ruche a bien ete cree!'
		  : 'Il y a eu un probleme lors de la creation de la ruche.';

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
		
		R::setup('mysql:host=localhost;
			dbname=didapi','root','');
		
		$ruche = R::dispense('ruche')
		$ruche->name = $data['name'];
		$ruche_id = R::store($ruche);

		$rucher = R::dispense('rucher', 'id = :rucher_id', array('rucher_id' => $rucher_id));
		$rucher->ownRuche[] = $ruche;
		
		$saved_rucher_id = R::store($rucher);
		
		if ($ruche_id != null && $saved_rucher_id != null)
		{
			$success = true;
		}
		
		return $success;
	}
?>
