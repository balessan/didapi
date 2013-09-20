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

	public function __construct($id = null, $title = null, $content = null, $date = null, $user_id = null)
	{
		if (isset($id)) parent::__construct($id);
		if (isset($content)) $this->_content = $content;
		if (isset($title)) $this->_title = $title;
		if (isset($date)) $this->_date = $date;
		if (isset($user_id)) $this->_user_id = $user_id;
	}

	public function Save($data)
	{
		return parent::Save($data, 'post');
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
