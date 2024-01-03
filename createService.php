<?php
session_start();
require_once 'function/createServices.php';
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
        <!-- Debut creation du nouveau service -->
        <form class="w-50 m-auto" action="./createService.php" method="POST" target="_self">
            <div class="mb-3">
                <label for="service" class="form-label">Nom du Service à integrer</label>
                <input type="text" name="service" class="form-control" id="service">
            </div>
            
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Validation du nouveau Services</button>
            </div>
        </form>


        <!-- Validation d'envoi des donnees en methode $_Post-->

        <?php



        createServices($pdo);


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