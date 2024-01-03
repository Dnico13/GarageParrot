<?php
require_once '../pdo.php';

function deleteReparation($pdo){
        
        
        $Id_Sup= $_GET['id'];
        
        

        $query  = $pdo->prepare("DELETE FROM `Reparations`WHERE id_reparation = :Id_sup");

        $query-> bindParam(':Id_sup' , $Id_Sup);
        $query->execute();

        
        
        header('location: ../admin.php');
}

deleteReparation($pdo);