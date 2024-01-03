<?php



function readReparations($pdo){
    try{
        $query= $pdo-> prepare("SELECT * FROM Reparations");
        $query -> execute();

        $readReparations = $query-> fetchAll(PDO::FETCH_ASSOC);
        return $readReparations;
    } catch (Exception $e){
        echo 'lecture de la liste des reparations impossibles';
    }

}