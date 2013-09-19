<?php
	include_once('../../globals.php');
	
	try {	
		$allContacts = ContactRepository::FindAll();
		$formattedContacts = array();

		foreach($allContacts as $contact)
		{
			$formattedContacts[] = $contact->toArray();
		}

		echo json_encode($formattedContacts);

	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>
