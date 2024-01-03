<?php
require_once '../pdo.php';

function deleteService($pdo){
        
        
        $Id_Sup= $_GET['id'];
        
        

        $query  = $pdo->prepare("DELETE FROM `Services`WHERE id_service = :Id_sup");

        $query-> bindParam(':Id_sup' , $Id_Sup);
        $query->execute();

        
        
        header('location: ../admin.php');
}

deleteService($pdo);
