<?php
require_once './template/top.php';
require_once './pdo.php';
require_once 'pdo.php';
require_once './function/readTemoignage.php';
?>



<body>
    <header>
        <img src="./asset/iconeGarageParrot.jpg" class="LogoHeader">
    </header>
    <main>

        <div class="containerPrestation">
            <div class="containerPrestation1">

                <div>
                    <a href="services.php">
                        <img src="./asset/VisuelRoue.JPG" alt="visuel d'illustration d une roue de voiture monter sur un pont">
                    </a>
                </div>

                <h3 class="menuaccueil">Services</h3>
            </div>


            <div class="containerReparation2">
                <div>
                    <a href="reparations.php">
                        <img src="./asset/VisuelReparations.JPG" alt="visuel d'illustration d une reparation d un vehicule">
                    </a>
                </div>

                <h3 class="menuaccueil">Réparations</h3>
            </div>


            <div class="containerventevehicule3">
                <div>
                    <a href="ventes.php">
                        <img src="./asset/VisuelVenteVehicules.JPG" alt="Visuel d un parc de vehicule d'occassions a vendre">
                    </a>
                </div>
                <h3 class="menuaccueil">Ventes Vehicules</h3>
            </div>

        </div>

        <section>
            <?php
            require_once 'temoignage.php';
            ?>
        </section>
    </main>
    <footer>
        <?php
        require_once './template/footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./s/app.js"></script>
</body>

</html>