<?php
	require_once('Mail.php');
	include_once('../../globals.php');	
	require('../../library/RedBeanORM/rb.php');
	
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
		  ? 'Votre message a bien ete sauvegarde!'
		  : 'Il y a eu un probleme lors de la sauvegarde du message.';

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
		
		R::setup('mysql:host=' . Database::HOST . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD);
		
		$contact = R::dispense('contact');
		$contact->name = $data['name'];
		$contact->firstname = $data['firstname'];
		$contact->email = $data['email'];
		$contact->phone = $data['phone'];
		$contact->comment = $data['comment'];
		
		$id = R::store($contact);
		
		SendContactMail($contact);

		if ($id != null)
		{
			$success = true;
		}
		
		return $success;
	}
	
	function SendContactMail($contact)
	{
		$from    = $contact->email;
		$to      = "postmaster@didapi.fr";
		$subject = "Contact";
		$body    = $contact->comment;
		
		$host     = "smtp.didapi.fr";
		$username = "postmaster@didapi.fr";
		$password = "8puMfhR3";
		$headers  = array('From' => $from,
				'To' => $to,
				'Subject' => $subject);
		
		$smtp = Mail::factory('smtp',
				array(
					'host' => $host,
					'port' => '25',
					'auth' => true,
					'username' => $username,
					'password' => $password
				)
			);
		
		$mail = $smtp->send($to, $headers, $body);
		
		if (PEAR::isError($mail)) {
			echo ("<p>" . $mail->getMessage() . "</p>");
		} else {
			echo ("<p>Message successfully sent</p>");
		}
	}
?>
