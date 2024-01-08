<?php
// Connexion à la base de données
require_once 'pdo.php';

// Requête SQL pour récupérer toutes les informations de la table "ma_table"
$query = $pdo-> prepare ("SELECT * FROM voitures ORDER BY prix DESC ");
$query -> execute();

// Récupération des résultats
$results = $query->fetchAll(PDO::FETCH_ASSOC);

// Encodage des résultats en JSON
$json = json_encode($results);

// Envoi des résultats
header('Content-Type: application/json');
echo $json;
?>



















