<?php
$server="localhost";
$username="root";
$password="";
$database="architecture";
$con=new mysqli($server,$username,$password,$database);
if($con->connect_error)
{
	die("statement error");
}
?>