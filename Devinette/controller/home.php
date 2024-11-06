<?php 


$query = "SELECT * FROM devinette";
$bdd = new PDO("mysql:host=localhost;dbname=devinette", "root", "");
$raq = $bdd->prepare($query);
$raq->execute();

$devinettes = [];

while ($row = $raq->fetch(PDO::FETCH_ASSOC)) {
    $devinette['id'] = $row['id'];
    $devinette['name'] = $row['name'];
    $devinette['question'] = $row['question'];
    $devinette['answer'] = $row['answer'];
    $devinette['created_at'] = $row['created_at'];

    $devinettes[] = $devinette;
}
include(VIEW . 'home.php');


