<?php



if ($_SERVER['REQUEST_METHOD'] === "POST")
{
    try{
    $email = htmlspecialchars($_POST['email']);
    $Password = htmlspecialchars($_POST['password']);

    if ($query = $pdo->prepare("SELECT * FROM employes WHERE email_employes =:email")) 
    {
     
        $query->bindParam(":email", $email);
        if ($query->execute()) {
            $row = $query->fetch(PDO::FETCH_ASSOC);
        
        if (password_verify($Password, $row['password'])) {
            
            $_SESSION['role'] = $row['role'];
            
            header('location: ./admin.php');
        } else {
            echo("<H3 class='text-center h3 text-danger'> Merci de corriger les erreurs de saisie</H3>");
            
                }
        }
        
    }
    } catch (PDOException $e) { 
        echo('une erreur de saisie est apparrue');
            }
}

