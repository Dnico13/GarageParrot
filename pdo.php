<?php


$User= 'ndev2023';
$Password = 'Bouddha83680@';


try {
    $pdo = new PDO('mysql:host=mysql-ndev2023.alwaysdata.net;dbname=ndev2023_garageparrotecf', $User, $Password);
   
} catch (PDOException $e) {
    echo " il y a erreur dans la connexion avec la Base De Donnée";
}


