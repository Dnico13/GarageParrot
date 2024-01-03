<?php

function readTemoignages($pdo){
    try{
        $query= $pdo-> prepare("SELECT * FROM Temoignage WHERE Validate = 1 ORDER BY RAND() LIMIT 1");

        $query -> execute();

        $readTemoignages = $query-> fetch(PDO::FETCH_ASSOC);
        return $readTemoignages;
    } catch (Exception $e){
        echo 'lecture des avis est impossible';
    }

}

function readAviss($pdo){
    try{
        $query= $pdo-> prepare("SELECT * FROM Temoignage");
        
        $query -> execute();

        $readAviss = $query-> fetchAll(PDO::FETCH_ASSOC);
        return $readAviss;
    } catch (Exception $e){
        echo 'lecture des avis est  impossible';
    }

}