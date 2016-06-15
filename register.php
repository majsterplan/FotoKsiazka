<?php
require_once("smarty-3.1.29/libs/Smarty.class.php");

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

$smarty->display("register.tpl");

if(!empty($_SESSION["error"]))
	$_SESSION["error"] = "";
if(isset($_SESSION["tempLogin"]))
	unset($_SESSION["tempLogin"]);