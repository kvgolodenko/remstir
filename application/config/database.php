<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array(
		'type'		=> 'PDO_MySQL',
		'connection' => array(
			'dsn'		=> 'mysql:host=localhost;dbname=apollon;charset=utf8',
			'username'	=> 'apollon',
			'password'	=> 'm3Lb4UH-juvEXLqa',
			'persistent'	=> false,
		),
		'table_prefix' => '',
		'charset'	=> 'utf8',
		'caching'	=> false,
		'profiling'	=> true,
	),
);
