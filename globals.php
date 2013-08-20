<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	
	$dir = dirname(__DIR__ . '/vendor/patchwork/utf8/*');
	
	require $dir . '/class/Patchwork/Utf8.php';
	require $dir . '/class/Patchwork/Utf8/Bootup.php';
	require $dir . '/class/Patchwork/PHP/Shim/Xml.php';
	require $dir . '/class/Patchwork/PHP/Shim/Intl.php';
	require $dir . '/class/Patchwork/PHP/Shim/Iconv.php';
	require $dir . '/class/Patchwork/PHP/Shim/Mbstring.php';
	require $dir . '/class/Patchwork/PHP/Shim/Normalizer.php';
	
	class_exists('Normalizer', false) or require $dir . '/class/Normalizer.php';

	//Bootstrap for Patchwork utf8
	\Patchwork\Utf8\Bootup::initAll();
	\Patchwork\Utf8\Bootup::filterRequestUri();
	\Patchwork\Utf8\Bootup::filterRequestInputs();
	
	$include_path = '/didapi/';

	class Database 
	{	
		const NAME     = 'didapi';
		const PASSWORD = '';
		const HOST     = 'localhost';
		const USERNAME = 'root';
	}
?> 
