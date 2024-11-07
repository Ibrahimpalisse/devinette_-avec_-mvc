<?php 

CLASS Home
{
    public function  showHome()
    {

        $manager = new DevinetteManger();
        $devinettes = $manager->findAll();
        
   

        $myView = new View ('home');
        $myView->render( $devinettes);
     }

     public function showContact(){
        $myView = new View ('contact');
        $myView->render();
     }
}



