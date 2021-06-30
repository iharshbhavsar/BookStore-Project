<?php

define('DB_USER', 'summer2021');
define('DB_PASSWORD', 'summer2021');
define('DB_HOST', 'localhost');
define('DB_NAME', 'BookStore');

$dbc_oop = new MySQLi(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($dbc_oop->connect_error)
{
	echo $dbc_oop->connect_error;
	unset($dbc_oop);
}

else
{
	$dbc_oop->set_charset('utf8');
}


?>