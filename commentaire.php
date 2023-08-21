<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page pour laisser un commentaire sur le garage automobile Vincent Parrot">

    <title>Garage Parot: Garage automobile dans la région toulousaine.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./asset/iconeGarageParrot.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>
<body>
    <header>
        <?php
            require_once 'header.php';
        ?>
        <h1>Laissez un commentaire</h1>
    </header>
    <main>
        <!--<form class="formcommentaire">
                <div>
                        <label for="name">Nom</label>
                        <div>    
                            <input id="name" type="text" require>
                        </div>
                </div>

                <div>
                        <label for="note">Note sur 5 :</label>
                        <div>
                            <input id="note" type="range" min="0" max="5" step="0.5" require>
                        </div>
                </div>
                <div>
                        <label for="commentaire2"></label>    
                        <div>    
                            <textarea name="commentaire2" id="commentaire2" require>Commentaire</textarea>
                        </div>
                </div>

                <button  type="submit" class="validcom" name="submit">Envoyer</button>
        </form>-->
        <form class="formcommentaire" action="..." method="...">
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-10 ">
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
            </div>

            <div class="row mb-3">
                <label for="note" class="col-sm-2 col-form-label">Note:</label>
                    <div class="col-sm-10">
                        <input type="range" class="form-control" id="note">
                    </div>
            </div>
            <div>
                <label class="form-label" for="message">Message:</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
            </div>
            <button type="submit" class="btnEnvoiCom">Envoi</button>
        </form>
    </main>
    <footer>
        <?php
            require_once 'footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>