<?php
require_once '../pdo.php';


IF (isset($_POST['submit'])) {

    try {
    $validate = htmlentities($_POST['Validate']);
    $id = htmlentities($_POST['id_temoignage']);

    $query = $pdo -> prepare("UPDATE Temoignage SET Validate = :validate WHERE id_temoignage = :id"); 
    

    
    $query -> bindParam(':id',$id);
    $query -> bindParam(':validate',$validate);
    

    $query-> execute();


    header('location: ../admin.php');

    } catch (PDOException $e){
        echo"les donnees n'ont pas été envoyé correctement.<br> Merci de bien vouloir ré-essayer";
    }

}
?>