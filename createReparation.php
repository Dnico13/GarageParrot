<?php
session_start();
require_once 'function/create_Reparation.php';
require_once './template/top.php';
require_once 'pdo.php';



?>

<body>
    <header>
        <?php
        require_once './template/admin_header.php';
        ?>

    </header>
    <Main>
        <!-- Debut creation de la nouvelle reparation -->
        <form class="w-50 m-auto" action="./createReparation.php" method="POST" target="_self">
            <div class="mb-3">
                <label for="reparation" class="form-label">Nom de la réparation à integrer</label>
                <input type="text" name="reparation" class="form-control" id="reparation">
            </div>
            
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Validation de votre nouvelle réparation</button>
            </div>
        </form>


        <!-- Validation d'envoi des donnees en methode $_Post-->

        <?php



        createReparations($pdo);


        ?>


    </Main>
    <footer>
        <?php
        require_once './template/admin_footer.php';
        ?>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>