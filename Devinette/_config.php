<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//echo'<pre>';
//var_dump($_SERVER);
//echo '</pre>';

$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];

define('HOST', 'http://'.$host. '/devinette_mvc/Devinette/');
define('ROOT',$root. '/devinette_mvc/Devinette/' );


define('CONTROLLER', ROOT.'controller/');
define('VIEW', ROOT.'view/');
define('MODEL', ROOT.'model/');

define('ASSETS', HOST.'assets/');








//echo HOST;
//echo ROOT;
//echo CONTROLLER;

//if(is_dir(CONTROLLER)){

//    $controllers = scandir(CONTROLLER);

//    echo '<h2>Liste des controllers</h2>';
//    echo'<ul>';

//    foreach($controllers as $controller){
//       if($controller != '.' && $controller != '..'){
//            echo '<li>';
//            echo $controller;
//            echo '</li>';
//        }
//    }
//    echo'</ul>';
//}else{
//    echo '<h2>Aucun controller</h2>';
//}