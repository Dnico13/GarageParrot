<?php



function readServices($pdo){
    try{
        $query= $pdo-> prepare("SELECT * FROM Services");
        $query -> execute();

        $readServices = $query-> fetchAll(PDO::FETCH_ASSOC);
        return $readServices;
    } catch (PDOException $e){
        echo 'lecture de la liste des services impossibles';
    }

}