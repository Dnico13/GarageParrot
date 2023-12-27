<?php
require_once './template/top.php';
?>


<body>
    <header>
        <?php
        require_once './template/header.php';
        ?>
        <script>
            document.querySelector('#services').style.color = "#FFFFFF";
        </script>
        <h1>Services</h1>
    </header>
    <main>
        <article>
            <div class="container">

                <div class="row">
                    <div class="col" id="roue2">
                        <img src="./asset/VisuelRoue.JPG" class="roue">
                    </div>
                    <ul class="listeServices col ">

                    </ul>
                </div>
            </div>
        </article>
        <section>
            <?php
            require_once 'temoignage.php';
            ?>
        </section>

    </main>
    <footer>
        <?php
        include_once './template/footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/listServices.js"></script>
</body>

</html>