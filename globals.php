<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

	require 'vendor/autoload.php';
	use RedBean_Facade as R;
	
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
	
	//Include Path definition to take care of local Apache Issue
	$include_path = '/didapi/';
	
	if (!isset($_SESSION)) { session_start(); }
?>

