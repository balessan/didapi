<?php
	include('../../globals.php');	

	$messageId = $_GET['id'];
	$message = null;

	if (isset($messageId))
	{
		$messageEntity = ContactRepository::FindById('contact', $messageId);

		$message = new Contact($messageEntity->id, $messageEntity->name, $messageEntity->firstname, $messageEntity->email, $messageEntity->phone, $messageEntity->comment);

		$message = $message->toArray();
	}
	
	return isset($message) == true ? json_encode($message) : json_encode('There was an error while processing the retrieval og this message'); 
?>
