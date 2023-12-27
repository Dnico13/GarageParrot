<?php
require_once './template/top.php';
?>

<body>
    <header>
        <?php
        require_once './template/header.php';
        ?>
        <script>
            document.querySelector('#reparations').style.color = "#FFFFFF";
        </script>
        <h1>Réparations</h1>
    </header>
    <main>
        <article>
            <div class="container">

                <div class="row">
                    <div class="col" id="capot2">
                        <img src="./asset/VisuelReparations.JPG" class="capot" alt="illustration d une voiture capot soulevée">
                    </div>
                    <ul class="ListReparations col ">

                    </ul>
                </div>
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
        require_once './template/footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/listReparations.js"></script>

</body>

</html>