<?php 
   include_once("_config.php");

   $request = isset($_GET['r']) ? $_GET['r'] : null;
   if ($request == '') {   
    echo 'Votre le URL est vide';
    exit;
   }else{
      if ($request == 'home') {
         include_once(CONTROLLER."home.php");
      }else{
         echo"404";
      }
   }
   

  