<?php
require_once("smarty-3.1.29/libs/Smarty.class.php");
require_once("classes/UsersManager.php");
require_once("classes/ImagesManager.php");
require_once("classes/ErrorConverter.php");

session_start();

if(!isset($_SESSION["userId"]))
	$_SESSION["userId"] = -1;
if(!isset($_SESSION["error"]))
	$_SESSION["error"] = "";
if(!isset($_SESSION["success"]))
	$_SESSION["success"] = false;

$smarty = new Smarty();
$smarty->template_dir = "./templates";
$smarty->compile_dir = "./templates_c";

$imagesManager = new ImagesManager;
$errorConverter = new ErrorConverter;
$images = $imagesManager->getImages($_SESSION["userId"]);
$info = $errorConverter->convert($images);
if(empty($info))
{
	$smarty->assign("info", "");
	$smarty->assign("images", $images);
}
else
{
	$smarty->assign("info", $info);
	$smarty->assign("images", array());
}

if(isset($_SESSION["userId"]) && $_SESSION["userId"] != -1)
{
	$usersManager = new UsersManager;
	$result = $usersManager->getUserData($_SESSION["userId"]);
	$tmpError = $errorConverter->convert($result);
	if(empty($tmpError))
		$smarty->assign("login", $result);
	else
	{
		$_SESSION["error"] = $tmpError;
		$smarty->assign("login", "nieznany");
		$_SESSION["userId"] = -1;
	}
}

$smarty->display("index.tpl");

if($_SESSION["success"])
	$_SESSION["success"] = false;
if(!empty($_SESSION["error"]))
	$_SESSION["error"] = "";