<?php



class DevinetteManger
{

    private $bdd;
 
    public function __construct()
    {
        $this->bdd = new PDO("mysql:host=localhost;dbname=devinette", "root", "");
    }
    
    public function findAll()
    {
    
        $bdd =  $this->bdd;
        $query = "SELECT * FROM devinette";
        $bdd =
        $raq = $bdd->prepare($query);
        $raq->execute();
        
        $devinettes = [];
        
        while ($row = $raq->fetch(PDO::FETCH_ASSOC)) {

            $devinette = new Devinette();
            $devinette->setId( $row['id']);
            $devinette->setName($row['name']);
            $devinette->setQuestion($row['question']);
            $devinette->setAnswer($row['answer']);
            $devinette->setCreatedAt($row['created_at']);

        
            $devinettes[] = $devinette;
        }

        return $devinettes;
    }



    public function find($id)
    { 
        $bdd = $this->bdd;
        $sql = "SELECT * FROM devinette WHERE id = :id";
        $raq = $this->bdd->prepare($sql);
        $raq->bindParam(':id', $id, PDO::PARAM_INT);
        $raq->execute();
        $row = $raq->fetch(PDO::FETCH_ASSOC);
    
     
        $devinette = new Devinette();
            $devinette->setId( $row['id']);
            $devinette->setName($row['name']);
            $devinette->setQuestion($row['question']);
            $devinette->setAnswer($row['answer']);
            $devinette->setCreatedAt($row['created_at']);

            return $devinette;
    }

    public function create($values){

        $bdd = $this->bdd;

        if ($values === null) {
            echo "Erreur : les valeurs ne sont pas définies.";
            return;
        }
    
        $query = "INSERT INTO devinette (name, question, answer, created_at)
                  VALUES (:name, :question, :answer, NOW())";
    
        $req = $bdd->prepare($query);
        $req->bindValue(':name', $values['name'], PDO::PARAM_STR);
        $req->bindValue(':question', $values['question'], PDO::PARAM_STR);
        $req->bindValue(':answer', $values['answer'], PDO::PARAM_STR);

        var_dump($req->execute());
    
        $req->execute();
    }

  
}