<?php 
include_once("_config.php");

$request = isset($_GET['r']) ? $_GET['r'] : null;

include_once(CLASSES . "Routeur.php");

$routeur = new Routeur($request);
$routeur->renderController();
?>
