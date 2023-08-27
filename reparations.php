<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="liste des differentes reparations que propose le Garage Parrot à Toulouse.">

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
            <script> document.querySelector('#reparations').style.color = "#FFFFFF";</script>
            <h1>Réparations</h1>
    </header>
    <main>
        <article>
            <div class="containerreparations">
                
            
                    <div>
                            <img src="./asset/VisuelReparations.JPG" class="capot">
                    </div>
                    <ul class="ListReparations">

                    </ul>
            


            </div>
        </article>
        <section>
            <?php
                    include './template/temoignage.php';
             ?>
        </section>

    </main>
    <footer>
            <?php
                require_once './template/footer.php';
            ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/listReparations.js"></script>

</body>
</html>