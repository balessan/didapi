<?php
	echo 'LAAAA';
	include_once('../../globals.php');
	require_once('../../library/RedBeanORM/rb.php');
	
	$ruche_id = $_GET["ruche_id"];
	echo $ruche_id;
	if (isset($ruche_id))
	{	
		if($_SERVER['REQUEST_METHOD'] == 'GET') {
			// if form has been posted process data

			// you dont need the addContact function you jsut need to put it in a new array
			// and it doesnt make sense in this context so jsut do it here
			// then used json_decode and json_decode to read/save your json in
			// saveContact()
			$data = array(
				'ruche_id' => $_GET['ruche_id']
			);

			// always return true if you save the contact data ok or false if it fails
			$response['status'] = deleteRuche($data) ? 'success' : 'error';
			$response['message'] = $response['status']
			  ? 'La ruche a bien été supprimée !'
			  : 'Il y a eu un problème lors de la suppression de la ruche.';

			header('Content-type: application/json');
			echo json_encode($response);
			exit;
		}
	}

	function deleteRuche($data) {
		echo 'LAAAA';	
		$success = false;

		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
		
		$ruche = R::findOne('ruche', 'id' => ':ruche_id', array(':ruche_id' => $ruche_id));
		R::trash($ruche);
		
		$ruche_saved = R::findOne('ruche', 'id' => ':ruche_id', array(':ruche_id' => $ruche_id));

		if (!isset($ruche_saved))
		{
			$success = true;
		}
		
		return $success;
	}

?>	
