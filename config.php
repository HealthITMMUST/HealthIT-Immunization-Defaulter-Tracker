<?php

$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$dbname='immunization';


$mysqli=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if(!$mysqli){
	die("Could not connect to the database".mysql_error($mysqli));
}

?>