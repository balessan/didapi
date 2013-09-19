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
	protected $_name;
	protected $_email;
	protected $_phone;
	protected $_firstname;
	protected $_comment;

	public function __construct($id, $name, $firstname, $email, $phone, $comment)
	{
		parent::__construct($id);
		$this->_name = $name;
		$this->_firstname = $firstname;
		$this->_email = $email;
		$this->_phone = $phone;
		$this->_comment = $comment;
	}

	public function SaveEntity($post) 
	{
		$success = false;

		$success = parent::SaveEntity($post, 'contact');

		$this->SendContactMail();

		return $success;
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
