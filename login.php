<?php
require_once("classes/UsersManager.php");
require_once("classes/ErrorConverter.php");

session_start();

if(!isset($_SESSION["userId"]))
	$_SESSION["userId"] = -1;
if(!isset($_SESSION["error"]))
	$_SESSION["error"] = "";
if(!isset($_SESSION["success"]))
	$_SESSION["success"] = false;

if(isset($_POST["comein"]))
{
	$usersManager = new UsersManager;
	$errorConverter = new ErrorConverter;
	$code = $usersManager->validateUser($_POST["login"], $_POST["password"]);
	$_SESSION["error"] = $errorConverter->convert($code);
	if(!empty($_SESSION["error"]))
	{
		header("Location: " . $_SERVER["HTTP_REFERER"]);
		exit();
	}
	if($code)
	{
		$_SESSION["success"] = true;
		$_SESSION["userId"] = $code;
		header("Location: index.php");
		exit();
	}
}
else
{
	$_SESSION["error"] = "Tak się nie pobawisz.";
	header("Location: index.php");
	exit();
}