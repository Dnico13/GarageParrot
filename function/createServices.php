<?php



function createServices($pdo)
{
  if (isset($_POST['service'])){
      try { 
        
        
        $service= htmlspecialchars($_POST['service']); 
        

        $query  = $pdo->prepare('INSERT INTO Services (service) VALUES (:service)');

       

        $query->bindParam(':service',$service );
        

        $query->execute();
        
        header('location: ./admin.php');
        
      } catch (PDOException $e){
        echo ' Veuillez verifier vos information.<br>
              La creation de votre service n\'a pas abouti';
      }
    } 
  }
