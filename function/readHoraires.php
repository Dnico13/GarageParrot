<?php
require_once './pdo.php';



function readHoraires($pdo){
    try{
        $query= $pdo-> prepare("SELECT * FROM Horaires");
        $query -> execute();

        $readHoraires = $query-> fetchAll(PDO::FETCH_ASSOC);
        return $readHoraires;
    } catch (Exception $e){
        echo 'lecture des horaires impossibles';
    }

}