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

    <?php
    require_once './array/arrayCar.php';
    $id = $_GET['id'];
    ?>
</head>

<body>
    <header>
        <?php
        require_once './template/header.php';
        ?>
        <h1> Contactez-nous</h1>
    </header>
    <main>
        <div class=" container  text-center d-flex flex-column my-5">
            <div class="row">
                <div class="col-md-4">
                    <p>Venez prendre un rdv pour découvrir votre futur</p>
                    <p> <?= $listCars[$id]["Marque"]." ".$listCars[$id]["Modele"];?></p>
                    <p> <?= $listCars[$id]["image"];?></p>
                    <p>A tres vite..</p>

                </div>
                <div class="col-md-8 d-flex flex-column">

                    <form class="formcontact" method="post" action="envoiContact.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="firstname">Prénom: </label>
                                <div>
                                    <input type="text" name="firstname" id="firstname" class="w-75" require><br>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="name">Nom:</label>
                                <div>
                                    <input type="text" name="name" id="name" require class="w-75"><br>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="email">Email:</label>
                                <div>
                                    <input type="email" name="email" id="email" require class="w-75"><br>
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <label for="phone"> Tel:</label>
                                <div>
                                    <input type="tel" name="phone" id="phone" require minlength="10" maxlength="10" class="w-75"><br>
                                </div>
                            </div>
                            <label for="Objet">Objet: </label>
                                <div>
                                    <input type="text" name="objet" id="objet" class="w-75" require>Prise de rdv pour decouvrir votre <?= $listCars[$id]["Marque"]." ". $listCars[$id]["Modele"];?> <br>
                                </div>
                            
                            <div class="col-md-12">
                                <label for="commentaire"></label>

                                <textarea name="commentaire" id="commentaire" class="col-md-8" cols="28" rows="5" require>Message...</textarea><br>

                            </div>
                            <button type="submit" class="validcontact mb-1 mx-auto w-25 align-self-end" name="submit">Envoyer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

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