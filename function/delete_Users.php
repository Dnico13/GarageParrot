<?php
require_once '../pdo.php';

function deleteUser($pdo){
    
        $user_id = $_GET['id'];
        $user_id_int= intval($user_id);
        
        $query  = $pdo->prepare("DELETE FROM employes WHERE id= :id");
        $query->bindParam(':id', $user_id_int);
        
        $query->execute();
        
        
        header('Location: ../admin.php');
            

    }
        
     

deleteUser($pdo);