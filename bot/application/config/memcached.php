<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Memcached settings
| -------------------------------------------------------------------------
| Your Memcached servers can be specified below.
|
|	See: https://codeigniter.com/user_guide/libraries/caching.html#memcached
|
*/
$config = array(
	'default' => array(
		'hostname' => 'myserver4aditidashboard.mysql.database.azure.com',
		'port'     => '11211',
		'weight'   => '1',
	),
);
