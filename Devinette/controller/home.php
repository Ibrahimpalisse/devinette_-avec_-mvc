<?php 

CLASS Home
{
    public function  showHome()
    {

        $manager = new DevinetteManger();
        $devinettes = $manager->findAll();
        
   

        $myView = new View ('home');
        $myView->render( array("devinettes" => $devinettes));
     }

     public function showContact(){
        $myView = new View ('contact');
        $myView->render();
     }

     public function editDev(){

      if (isset($_GET["id"])) { 
  
         $id = $_GET["id"];

         $manager = new DevinetteManger();
         $devinette = $manager->find($id);
    
     }else{
         $devinette = new Devinette();
     }
     $myView = new View ('edit');
     $myView->render( array("devinette" => $devinette ));
}

}

