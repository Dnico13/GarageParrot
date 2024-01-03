<?php



function creatUser($pdo)
{
  if (isset($_POST['submit'])){
      try { 
        
        
        $email= htmlspecialchars($_POST['email_employes']); 
        
        $role= htmlspecialchars($_POST['role']);

        $query  = $pdo->prepare('INSERT INTO employes (email_employes, password, role) VALUES (:email, :password, :role)');

        $motDePasse = htmlspecialchars($_POST['password']);
        $hachage = password_hash($motDePasse, PASSWORD_DEFAULT);

        $query->bindParam(':email',$email );
        $query->bindParam(':role', $role);
        $query->bindParam(':password', $hachage);

        $query->execute();
        
        header('location: ./admin.php');
        
      } catch (PDOException $e){
        echo ' Veuillez verifier vos information.<br>
              La creation de votre nouveau gestionnaire n\'a pas abouti';
      }
    } 
  }

