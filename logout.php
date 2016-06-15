<?php

session_start();

if(!isset($_SESSION["userId"]))
	$_SESSION["userId"] = -1;
if(!isset($_SESSION["error"]))
	$_SESSION["error"] = "";
if(!isset($_SESSION["success"]))
	$_SESSION["success"] = false;

if($_SESSION["userId"] != -1)
{
	$_SESSION["userId"] = -1;
	$_SESSION["success"] = true;
	header("Location: index.php");
	exit();
}