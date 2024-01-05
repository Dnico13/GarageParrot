<?php
IF (isset($_POST['logout'])){
unset($_SESSION['role']);
session_destroy();

header('location: ../connexion.php');
exit();
};