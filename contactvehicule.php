<?php
require_once './array/arrayCar.php';
require_once 'pdo.php';

$listCars = getlistCars($pdo);

$id_voitures = $_GET['id'];

require_once './template/top.php';
?>


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
                    <p>Venez reserver votre essai, au garage, afin de découvrir votre future</p>
                    <p> <?= $listCars[$id_voitures]['marque'] . " " . $listCars[$id_voitures]['modele']; ?></p>
                    <img class="imagecontactvehicule my-2" src="<?= $listCars[$id_voitures]['picture']; ?>"></img>
                    <br>
                    <p>A tres vite..</p>

                </div>
                <div class="col-md-8 d-flex flex-column">

                    <form class="formcontact" method="post" action="">
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
                                <input type="text" name="objet" id="objet" class="w-75 text-center" require value="Prise de rdv pour découvrir votre <?= $listCars[$id_voitures]['marque'] . " " . $listCars[$id_voitures]['modele']; ?>."> <br>
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
    <script src="../js/createcontactvehicule.js"></script>
</body>

</html>