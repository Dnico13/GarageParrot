<?php


function readUsers($pdo){
    try{
        $query= $pdo-> prepare("SELECT * FROM employes ");
        $query -> execute();

        $Employes = $query-> fetchAll(PDO::FETCH_ASSOC);
        return $Employes;
    } catch (Exception $e){
        echo 'lecture de la liste des utilisateurs est impossible';
    }

}