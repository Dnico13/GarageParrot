<?php
require_once '../pdo.php';

function MajHoraires($pdo){

$MajHoraires= htmlspecialchars($_POST['id_horaires']);


$MajHoraires_matin = htmlspecialchars($_POST['horaires_matin']);
$MajHoraires_apm = htmlspecialchars($_POST['horaires_apm']);


$query  = $pdo->prepare("UPDATE Horaires SET horaires_matin= (:horairesmat), horaires_apm= (:horairesapm) WHERE id_horaires= (:Id)");

$query-> bindParam(':Id', $MajHoraires);
$query-> bindParam(':horairesmat' , $MajHoraires_matin);
$query-> bindParam(':horairesapm' , $MajHoraires_apm);


$query->execute();

header('location: ../admin.php');
}

MajHoraires($pdo);