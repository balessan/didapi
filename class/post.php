<?php

/**
*
* Class Post used to represent a single blog post
* Copyright Benoît ALESSANDRONI
*
**/
class Post extends Entity
{
	protected $_title;
	protected $_content;
	protected $_date;
	protected $_user_id;

	public function __construct($id, $title, $content, $date, $user_id)
	{
		parent::__construct($id);
		$this->_content = $content;
		$this->_title = $title;
		$this->_date = $date;
		$this->_user_id = $user_id;
	}

	public function GetTitle()
	{
		return $this->_title;
	}

	public function GetContent()
	{
		return $this->_content;
	}

	public function GetDate()
	{
		return $this->_date;
	}

	public function GetUserId()
	{
		return $this->_user_id;
	}
}

?>
