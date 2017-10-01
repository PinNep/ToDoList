<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="todolist";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
}
$conn->query("SET NAMES UTF8");
$conn->query("SET character_set_client=utf8");
$conn->query("SET character_set_connection=utf8");
$conn->query("SET character_set_results=utf8");
