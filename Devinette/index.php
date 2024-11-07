<?php 
include_once("_config.php");

MYAutoload::start();

$request = isset($_GET['r']) ? $_GET['r'] : null;

$routeur = new Routeur($request);
$routeur->renderController();
?>
