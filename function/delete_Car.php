<?php
require_once '../pdo.php';

function deleteCar($pdo){
    try{

        IF (isset($_GET['Id'])){
            $id_delcar= htmlentities($_GET ['Id']);
            $query= $pdo-> prepare('DELETE FROM voitures where id_voitures= :id');

            $query-> BindParam(':id', $id_delcar);
            $query -> execute();

            header('location: ../admin.php');

        }

    } catch (PDOException $e){
        echo ' la suppression du vehicule a échoué';
    }

}
deleteCar($pdo);