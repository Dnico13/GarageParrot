<?php


$User= 'ndev2023';
$Password = 'Maude83480@';





try {
    $pdo = new PDO('mysql:host=mysql-ndev2023.alwaysdata.net;dbname=ndev2023_garageparrotecf', $User, $Password);
    echo "la connexion est reussie tu peux continuer";
} catch (PDOException $e) {
    echo " il y a  un soucis";
}