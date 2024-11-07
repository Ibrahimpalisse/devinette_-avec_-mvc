<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//echo'<pre>';
//var_dump($_SERVER);
//echo '</pre>';
class MYAutoload 
{
    public static function start()
    {

        spl_autoload_register(array(__CLASS__,'autoload'));
        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];
        
        define('HOST', 'http://'.$host. '/devinette_mvc/Devinette/');
        define('ROOT',$root. '/devinette_mvc/Devinette/' );
        
        
        define('CONTROLLER', ROOT.'controller/');
        define('VIEW', ROOT.'view/');
        define('MODEL', ROOT.'model/');
        define('CLASSES', ROOT.'classes/');
        
        define('ASSETS', HOST.'assets/');
        
    }
    public static function autoload($class){
        if(file_exists(MODEL.$class. '.php')){ 
            include_once(MODEL.$class. '.php');
        }
        elseif(file_exists(CLASSES.$class. '.php')){
            include_once(CLASSES.$class. '.php');
        }
        elseif(file_exists(VIEW.$class. '.php')){
            include_once(VIEW.$class.'.php');
        }
        elseif(file_exists(CONTROLLER.$class. '.php')){
            include_once(CONTROLLER.$class.'.php');	
        }
    }
}





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