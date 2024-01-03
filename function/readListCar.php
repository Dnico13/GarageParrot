<?php


function getlistCars($pdo)
{
    $query  = $pdo->prepare("SELECT * FROM voitures ORDER BY id_voitures DESC");

    $query->execute();
    $listCars = $query->fetchAll(PDO::FETCH_ASSOC);
    return $listCars;
}