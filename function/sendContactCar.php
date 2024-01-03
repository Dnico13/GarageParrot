<?php
require_once '../pdo.php';


IF (isset($_POST['submit'])) {

    try {
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $email = htmlentities($_POST['email']);
    $telephone = htmlentities($_POST['telephone']);
    $message = htmlentities($_POST['message']);
    $objet= htmlentities($_POST['objet']);

    $query = $pdo -> prepare("INSERT INTO Message (nom, prenom, email, telephone, objet, message) VALUES 
    (:nom, :prenom, :email, :telephone ,:objet , :message)");

    $query -> bindParam(':nom', $nom);
    $query -> bindParam(':prenom',$prenom);
    $query -> bindParam(':email',$email);
    $query -> bindParam(':telephone',$telephone);
    $query -> bindParam(':message',$message);
    $query -> bindParam(':objet',$objet);

    $query-> execute();

    header('location: ../accueil.php');
    } catch (PDOException $e){
        echo"les donnees n'ont pas été envoyé correctement.<br> Merci de bien vouloir ré-essayer";
    }

}