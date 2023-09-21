<?php


$User= 'ndev2023';
$Password = 'Maude83480@';


try {
    $pdo = new PDO('mysql:host=mysql-ndev2023.alwaysdata.net;dbname=ndev2023_garageparrotecf', $User, $Password);
   
} catch (PDOException $e) {
    echo " il y a  un soucis";
}


//$id = (int)$_GET['id'];
//$query  = $pdo->prepare("SELECT * FROM voitures");

//$query ->execute();
//$listCars = $query->fetchAll(PDO::FETCH_ASSOC);