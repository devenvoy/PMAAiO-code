<?php 

define("DB_HOST","localhost");
define("DB_USER","dev");
define("DB_PASS","136974");
define("DB_NAME","php_dev");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($connection->connect_error)
{
die("Connection failed: " . $connection->connect_error);
}