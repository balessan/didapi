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

	public function __construct($id = null, $name = null, $firstname = null, $email = null, $phone = null, $comment = null)
	{
		if (isset($id)) parent::__construct($id);
		if (isset($name)) $this->_name = $name;
		if (isset($firstname)) $this->_firstname = $firstname;
		if (isset($email)) $this->_email = $email;
		if (isset($phone)) $this->_phone = $phone;
		if (isset($comment)) $this->_comment = $comment;
	}

	public function Save($post) 
	{
		$success = false;

		$success = parent::Save($post, 'contact');

		//$this->SendContactMail();

		return $success;
	}

	private	function SendContactMail()
	{
		$from    = $this->_email;
		$to      = "postmaster@didapi.fr";
		$subject = "Contact";
		$body    = $this->_comment;
		
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
