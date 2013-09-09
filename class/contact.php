<?php

require_once 'Mail.php';
require_once __DIR__ . '/entity.php';	
/**
*
* Contact: Class derived from Entity used to manipulate contact information
* send through the contact form
*
**/
class Contact extends Entity 
{
	public function SaveEntity($post) 
	{
		$success = false;

		$success = parent::SaveEntity($post, 'contact');

		$this->SendContactMail();

		return $success;
	}
	
	public function Hello()
	{
		echo 'Hello body';
	}
	
	private	function SendContactMail()
	{
		$from    = $this->_entity->email;
		$to      = "postmaster@didapi.fr";
		$subject = "Contact";
		$body    = $this->_entity->comment;
		
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
}

?>
