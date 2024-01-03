<?php

function readMessages($pdo){
    try{
        $query= $pdo-> prepare("SELECT * FROM Message");
        $query -> execute();

        $readMessages = $query-> fetchAll(PDO::FETCH_ASSOC);
        return $readMessages;
    } catch (Exception $e){
        echo 'lecture des horaires impossibles';
    }

}