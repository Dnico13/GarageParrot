    <?php
    require_once 'pdo.php';
    require_once './array/arrayCar.php';
    $listCars = getlistCars($pdo);

    require_once './template/top.php';

    ?>

    <body>
        <header>
            <?php
            require_once './template/header.php';
            ?>
            <script>
                document.querySelector('#ventes').style.color = "#FFFFFF";
            </script>
            <h1> Vente de vehicules</h1>

        </header>
        <main class="container justify-content-center">
            <article>
                <?php


                require_once './array/listCar.php';
                ?>
            </article>
            <section>
                <?php
                include 'temoignage.php';
                ?>
            </section>
        </main>
        <footer>
            <?php
            require_once './template/footer.php';
            ?>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="./js/v"></script>
    </body>

    </html>