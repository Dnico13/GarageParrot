<?php
session_start();

require_once './template/top.php';
require_once 'pdo.php';
require_once 'function/create_car.php';
?>

<body>
    <header>
        <?php
        require_once './template/admin_header.php';
        ?>


    </header>
    <main>
        <!-- integration du formulaire de creation de realisation du texte -->
        <div class="container d-flex flex-column justify-content-center">

            <div class="row">

                <form class="w-50 m-auto" action="createCar.php" method="POST" enctype="multipart/form-data" target="_self">
                    <div class="mb-2">
                        <label for="annee" class="form-label">Année</label>
                        <input type="text" name="annee" class="form-control" id="annee" required>
                    </div>
                    <div class="mb-2">
                        <label for="kilometre" class="form-label">kilometre</label>
                        <input type="text" name="kilometre" class="form-control" id="kilometre" required>
                    </div>
                    <div class="mb-2">
                        <label for="energie" class="form-label">Energie</label>
                        <input type="text" name="energie" class="form-control" id="energie" required>

                    </div>
                    <div class="mb-2">
                        <label for="boite" class="form-label">Boite</label>
                        <input type="text" name="boite" class="form-control" id="boite" required>
                    </div>
                    <div class="mb-2">
                        <label for="porte" class="form-label">Nbre de Porte</label>
                        <input type="text" name="porte" class="form-control" id="porte" required>
                    </div>
                    <div class="mb-2">
                        <label for="marque" class="form-label">Marque</label>
                        <input type="text" name="marque" class="form-control" id="marque" required>
                    </div>
                    <div class="mb-2">
                        <label for="modele" class="form-label">Modele</label>
                        <input type="text" name="modele" class="form-control" id="modele" required>
                    </div>
                    <div class="mb-2">
                        <label for="motorisation" class="form-label">motorisation</label>
                        <input type="text" name="motorisation" class="form-control" id="motorisation" required>
                    </div>
                    <div class="mb-2">
                        <label for="consommation" class="form-label">Consommation</label>
                        <input type="text" name="consommation" class="form-control" id="consommation" required>
                    </div>
                    <div class="mb-2">
                        <label for="couleur" class="form-label">Couleur</label>
                        <input type="text" name="couleur" class="form-control" id="couleur" required>
                    </div>
                    <div class="mb-2">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="text" name="prix" class="form-control" id="prix" required>
                    </div>

                    <!-- fin du formulaire de creation de realisation  du texte -->

                    <!-- integration du formulaire de creation de realisation pour les images-->




                    <div class="mb-2">
                        <label for="Photo1" class="form-label">Photo1</label>
                        <input type="File" name="picture" class="form-control" id="picture" required>
                    </div>

                    <div class="mb-2">
                        <label for="Photo2" class="form-label">Photo2</label>
                        <input type="File" name="picture1" class="form-control" id="picture1" required>
                    </div>

                    <div class="mb-2">
                        <label for="Photo3" class="form-label">Photo3</label>
                        <input type="File" name="picture2" class="form-control" id="picture2" required>
                    </div>

                    <div class="text-end mt-2">
                        <button type="submit" class="btn btn-primary" name="Submit">Validation du formulaire</button>
                    </div>
                </form>
            </div>
            <!-- fin du formulaire de creation de realisation  pour les images -->
    <?php
        createCar($pdo);
    ?>

    </main>
    <footer>
        <?php
        require_once './template/admin_footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>