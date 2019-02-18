<?php
session_start();
if(!isset($_SESSION['password'])){
	
	$obj->permission = "false";
	$obj->ip = $_SERVER['REMOTE_ADDR'];
	$obj->message = "Fuck off";
	
	echo json_encode($obj);
	exit();
} else
{
}
?>