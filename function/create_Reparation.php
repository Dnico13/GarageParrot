<?php



function createReparations($pdo)
{
  if (isset($_POST['reparation'])){
      try { 
        
        
        $reparation= htmlspecialchars($_POST['reparation']); 
        

        $query  = $pdo->prepare('INSERT INTO Reparations (reparation) VALUES (:reparation)');

       

        $query->bindParam(':reparation',$reparation );
        

        $query->execute();
        
        header('location: ./admin.php');
        
      } catch (PDOException $e){
        echo ' Veuillez verifier vos information.<br>
              La creation de votre reparation n\'a pas abouti';
      }
    } 
  }