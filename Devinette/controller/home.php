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

public function addDev(){


    if (isset($_POST['values']['name'], $_POST['values']['question'], $_POST['values']['answer'])){ 
        $values = [
            'name' => $_POST['values']['name'],
            'question' => $_POST['values']['question'],
            'answer' => $_POST['values']['answer']
        ];

        $manager = new DevinetteManger();
        $manager->create($values);

        $myView = new View();
        $myView->redirect('home'); 
    } else {
        echo "Tous les champs ne sont pas remplis."; 
    }
}

}