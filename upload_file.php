<?php
require_once("classes/ImagesManager.php");
require_once("classes/ErrorConverter.php");

session_start();

if(!isset($_SESSION["userId"]))
	$_SESSION["userId"] = -1;
if(!isset($_SESSION["error"]))
	$_SESSION["error"] = "";
if(!isset($_SESSION["success"]))
	$_SESSION["success"] = false;

if(isset($_POST["upload"]))
{
	$imagesManager = new ImagesManager;
	$errorConverter = new ErrorConverter;
	$code = $imagesManager->uploadImage($_FILES["file"], $_SESSION["userId"], $_POST["private"]);
	$_SESSION["error"] = $errorConverter->convert($code);
	if(!empty($_SESSION["error"]))
	{
		header("Location:" . $_SERVER["HTTP_REFERER"]);
		exit();
	}
	if($code)
	{
		$_SESSION["success"] = true;
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