<?php
require_once '../pdo.php';


function deleteMessage($pdo){
        
        
        $Id_Sup= htmlspecialchars($_GET['id']);
        
        

        $query  = $pdo->prepare("DELETE FROM `Message`WHERE id_message = :Id_sup");

        $query-> bindParam(':Id_sup' , $Id_Sup);
        $query->execute();

        
        
        header('location: ../admin.php');
}

deleteMessage($pdo);