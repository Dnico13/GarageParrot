<?php
IF (isset($_POST['logout'])){
unset($_SESSION['role']);
session_destroy();
setcookie("garage_parrot", $_SESSION['role'], time() - 600, "/");
header('location: ../connexion.php');
exit();
};