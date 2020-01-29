<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL","http://localhost/Crud_Mvc/");
	$config['dbname'] = 'crud';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL","https://alfredoaugusto.com.br/Crud_Mvc");
	$config['dbname'] = 'crud';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
?>