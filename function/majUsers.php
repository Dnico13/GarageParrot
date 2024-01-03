<?php
require_once '../pdo.php';



function majUsers($pdo){
    IF (isset($_POST['submit'])) {
    
        try {
    
        $motDePasse = htmlspecialchars($_POST['password']);
        $hachage = password_hash($motDePasse, PASSWORD_DEFAULT);
        $id_up= $_POST['id'];
    
        $email = htmlentities($_POST['email_employes']);
        $role = htmlentities($_POST['role']);
    
        $query = $pdo -> prepare("UPDATE employes SET email_employes = :email, password = :password, role = :role WHERE id = :id"); 
        
    
        
        $query -> bindParam(':id',$id_up);
        $query -> bindParam(':email',$email);
        $query -> bindParam(':password',$hachage);
        $query -> bindParam(':role',$role);
        
    
        $query-> execute();
    
    
        header('location: ../admin.php');
    
        } catch (PDOException $e){
            echo"les donnees n'ont pas été envoyé correctement.<br> Merci de bien vouloir ré-essayer";
        }
    
    }
    }
    
    majUsers($pdo);
