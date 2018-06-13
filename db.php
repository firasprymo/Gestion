<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'emplois';
$con = new mysqli($host,$user,$pass,$db) or die($con->error);
if(!$con){
	die("connection failed:".mysqli_connect_error());
}
?>