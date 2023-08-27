<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page du formulaire Contact du site internet du Garage Parrot">

    <title>Garage Parot: Garage automobile dans la région toulousaine.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./asset/iconeGarageParrot.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>
<body>
    <header>
            <?php
                require_once './template/header.php';
            ?> 
            <h1> Formulaire de contact</h1>       
    </header>
    <main class="formcontact1">
            <form class="formcontact" method="post" action="envoiContact.php">
                <div class="divformcontact">
                    <label for="firstname">Prénom: </label>
                        <div>
                            <input type="text" name="firstname" id="firstname" require><br>
                        </div>
                </div>

                <div class="divformcontact">
                    <label for="name">Nom:</label>
                        <div>
                            <input type="text" name="name" id="name" require><br>
                        </div>              
                </div>

                <div class="divformcontact">
                    <label for="email">Email:</label>
                        <div>
                            <input type="email" name="email" id="email" require><br>
                        </div>
                 </div>

                <div class="divformcontact">
                    <label for="phone"> Tel:</label>
                        <div>    
                            <input type="tel" name="phone" id="phone" require minlength="10" maxlength="10"><br>
                        </div>             
                </div>
                <div class="divformcontact">
                    <label for="commentaire"></label>
                        
                            <textarea name="commentaire" id="commentaire" cols="28" rows="5" require>Message...</textarea><br>   
                        
                </div>
                <button  type="submit" class="validcontact" name="submit">Envoyer</button>
            </form>

    </main>
    <footer>
            <?php
                require_once './template/footer.php';
            ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>   
    
