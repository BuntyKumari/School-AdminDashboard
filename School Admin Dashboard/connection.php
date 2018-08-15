<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'school';

$con = mysqli_connect($servername, $username, $password, $db);


// checking if connection is succeded or not

if(!$con)
{
	die("not connected".mysqli_connect_error());
}

?>