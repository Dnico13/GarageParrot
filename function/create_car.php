<?php


Function createCar($pdo){
    if (($_SERVER['REQUEST_METHOD']== 'POST') && isset($_POST['Submit'])){

        
        $annee= htmlspecialchars($_POST['annee']);
        $kilometre= htmlspecialchars($_POST['kilometre']);
        $energie = htmlspecialchars($_POST['energie']);
        $boite = htmlspecialchars($_POST['boite']);
        $porte = htmlspecialchars($_POST['porte']);
        $marque = htmlspecialchars($_POST['marque']);
        $modele = htmlspecialchars($_POST['modele']);
        $motorisation = htmlspecialchars($_POST['motorisation']);
        $consommation = htmlspecialchars($_POST['consommation']);
        $couleur = htmlspecialchars($_POST['couleur']);
        $prix = htmlspecialchars($_POST['prix']);
        
        
        $tailleMax= 400000;
        $repertoire = "vehicules/";
        $mimeautorises = ["image/jpeg", "image/png", "image/gif", "image/webp"];
        $allowedFileTypes =["jpeg", "jpg", "png", "gif","webp"];
        $imageok1= true;
        $imageok2= true;
        $imageok3= true;
        
        //partie photo

        // Picture
        
        
        $targetFile1 = $repertoire . basename($_FILES["picture"]["name"]);
        $imageFileType1 = strtolower(pathinfo($targetFile1, PATHINFO_EXTENSION));

        
        $image_tmp_name1 = $_FILES['picture']['tmp_name'];  
        $image_error1 = $_FILES['picture']['error'];
        


        if($_FILES["picture"]["size"] > $tailleMax) {
            echo "Le fichier est trop volumineux.";
            $imageok1= false;
        }
        
        $fileMime1 = mime_content_type($_FILES["picture"]["tmp_name"]);
        if (!in_array($fileMime1, $mimeautorises)) {
        echo "Ce type de fichier n’est pas autorisé";
        $imageok1= false;
        }
        
        
        if (!in_array($imageFileType1, $allowedFileTypes)) {
        echo "Seules les images aux formats JPG, JPEG, PNG, GIF et WEBP sont autorisées.";
        $imageok1=false;
        }


        // Picture1
        
        $targetFile2 = $repertoire . basename($_FILES["picture1"]["name"]);
        $imageFileType2 = strtolower(pathinfo($targetFile2, PATHINFO_EXTENSION));

        
        $image_tmp_name2 = $_FILES['picture1']['tmp_name'];  
        $image_error2 = $_FILES['picture1']['error']; 

        if($_FILES["picture1"]["size"] > $tailleMax) {
            echo "Le fichier est trop volumineux.";
            $imageok2= false;
        }
        
        $fileMime2 = mime_content_type($_FILES["picture1"]["tmp_name"]);
        if (!in_array($fileMime2, $mimeautorises)) {
        echo "Ce type de fichier n’est pas autorisé";
        $imageok2= false;
        }
        
        
        if (!in_array($imageFileType2, $allowedFileTypes)) {
        echo "Seules les images aux formats JPG, JPEG, PNG, GIF et WEBP sont autorisées.";
        $imageok2= false;
        }

        // picture2
        
        $targetFile3 = $repertoire . basename($_FILES["picture2"]["name"]);
        $imageFileType3 = strtolower(pathinfo($targetFile3, PATHINFO_EXTENSION));

        
        $image_tmp_name3 = $_FILES['picture2']['tmp_name'];  
        $image_error3 = $_FILES['picture2']['error']; 

        if($_FILES["picture2"]["size"] > $tailleMax) {
            echo "La Photo 2 est trop volumineuse. Merci de la retrecir";
            $imageok3= false;
        }
        
        $fileMime3 = mime_content_type($_FILES["picture2"]["tmp_name"]);
        if (!in_array($fileMime3, $mimeautorises)) {
        echo "Le type de fichier correspondant a la 3 eme Image n est pas autorisee";
        $imageok3= false;
        }
        
        
        if (!in_array($imageFileType3, $allowedFileTypes)) {
        echo "Seules les images aux formats JPG, JPEG, PNG GIF eT WEBP sont autorisées.";
        $imageok3= false;
        }
        

        if ($image_error1 === 0 && $image_error2 === 0 && $image_error3 === 0 &&  $imageok1 === true && $imageok2 === true && $imageok3 === true) {

            
            $destination1 = $targetFile1;   
            move_uploaded_file($image_tmp_name1, $destination1);

            $destination2 = $targetFile2;  
            move_uploaded_file($image_tmp_name2, $destination2);

            $destination3 = $targetFile3;
            move_uploaded_file($image_tmp_name3, $destination3);
// donnees textuelles
// envoie en bdd

$query  = $pdo->prepare('INSERT INTO voitures (annee, kilometre, energie, boite, porte, marque, modele, motorisation, consommation, couleur, prix, picture, picture1, picture2) 
VALUES (:annee, :kilometre, :energie, :boite,:porte, :marque, :modele, :motorisation, :consommation, :couleur, :prix, :I1, :I2, :I3)');
            

        $query->bindParam(':annee', $annee);
        $query->bindParam(':kilometre', $kilometre);
        $query->bindParam(':energie', $energie);
        $query->bindParam(':boite', $boite);
        $query->bindParam(':porte', $porte);
        $query->bindParam(':marque', $marque);
        $query->bindParam(':modele', $modele);
        $query->bindParam(':motorisation', $motorisation);
        $query->bindParam(':consommation', $consommation);
        $query->bindParam(':couleur', $couleur);
        $query->bindParam(':prix', $prix);
        $query->bindParam(':I1', $destination1);
        $query->bindParam(':I2', $destination2);
        $query->bindParam(':I3', $destination3);
            
        
            
    
        $query->execute();
           
            
            header('location: ./admin.php');

        
        
        

    } else {
        echo " Il y a eu une erreur lors du téléchargement des images";
    } 
}
}    
createCar($pdo);