<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Liste des vehicules vendues par le garage Parrot à Toulouse">

    <title>Garage Parot: Garage automobile dans la région toulousaine.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./asset/iconeGarageParrot.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>
<body>
    <header>
        <?php
            require_once'header.php';
        ?>
        <script> document.querySelector('#ventes').style.color = "#FFFFFF";</script>
        <h1> Vente de vehicules</h1>
    </header>
    <main>
        <article> 
        <div class=".containerVisuVehicule" id="voiturevisu">
            <!--<div class="continerDetail">
                
                    <img src="./asset/picCar/aircross/aircross1.jpg" alt="photo voiture">
                <div class="containerDescriptif">
                    <div>
                        <div>Kilometrage: 2023</div>
                        <div>Année de mise en circulation:03/2022</div>
                        <div>Prix de vente:16 999Euros</div>
                    </div>
                    <button>
                       <a href="descriptif.php" class="buttonDescriptif"> Details.
                    </button>
                </div>
            </div>-->
        </div>
        </article>
        <section>
            <?php
                    include 'temoignage.php';
             ?>
        </section>
    </main>
    <footer>
        <?php
            require_once'footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/vehicule.js"></script>
</body>
</html>