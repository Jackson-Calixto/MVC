<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIROMENT == "development") {
	$config['dbname'] = 'galeria';
	$config['host'] = '127.0.0.1';
	$config['dbuser'] = 'nanotech';
	$config['dbpass'] = 'nanotech';
} else {
	$config['dbname'] = 'galeria';
	$config['host'] = '10.96.224.25';
	$config['dbuser'] = 'nanotech';
	$config['dbpass'] = 'nanotech';
}