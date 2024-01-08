<?php
require_once './template/top.php';
require_once 'pdo.php';
require_once './function/readTemoignage.php';
?>


<body>
    <header>
        <?php
        require_once './template/header.php';
        ?>
        <h1>Laissez un commentaire</h1>
    </header>
    <main>

        <form class="formcommentaire" action="function/sendTemoignage.php" method="POST">
            <div class="row mb-3">
                <label for="nom_temoignage" class="col-sm-2 col-form-label">Nom:</label>
                <div class="col-sm-10 ">
                    <input type="text" class="form-control" name="nom_temoignage" id="nom_temoignage">
                </div>
            </div>

            <div class="row mb-3">
                <label for="note" class="col-sm-2 col-form-label">Note sur 5:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="note" id="note">
                </div>
            </div>
            <div>
                <label class="form-label" for="avis">Message:</label>
                <textarea class="form-control" name="avis" id="avis" cols="30" rows="7" placeholder="Laissez votre temoignage ici"></textarea>
            </div>
            <div>
                <input type="hidden" class="form-control" name="Validate" value="0">
            </div>

            <button  onclick="return send()" type="submit" class="btnEnvoiCom" name="submit">Envoi</button>
        </form>
    </main>
    <footer>
        <?php
        require_once './template/footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/alerte.js"></script>
</body>

</html>