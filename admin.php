<?php
session_start();
require_once './template/top.php';

?>

<body>
    <header>
        <?php
        require_once './template/admin_header.php';
        ?>

    </header>
    <main class="m-5">
        <ul class="">

            <li>
                <h3> Modification des horaires d'ouvertures </h3>
            </li>
            <ol>
                <?php
                require_once './template/horaires.php'
                ?>
            </ol>
            <li>
                <h3> Modification des Services</h3>
            </li>
            <ol>
                <?php
                require_once './array/arrayservices.php';
                ?>
                <form method="post" action="./array/traitement.php">
                    <input type="text" name="descriptif" value="<?php echo $arrayServices[1]; ?>">
                    <input type="submit" value="Modifier">
                </form>
            </ol>




            <li>
                <h3> Modification des Prestations</h3>
            </li>
            <ol>
                <?php
                require_once './array/arrayreparations.php';
                ?>
            </ol>


            <li>
                <h3>Validation des commentaires clients</h3>
            </li>


            <li>
                <h3>Creation des profils Employés</h3>
            </li>


        </ul>
    </main>
    <footer>
        <?php
        require_once './template/admin_footer.php';
        ?>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>