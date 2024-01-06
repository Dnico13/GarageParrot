<?php

//echo '<pre>';
//var_dump($_SESSION);
//echo '</pre>';
?>

<body>
    <header>
        <?php
        require_once './template/admin_header.php';
        ?>

    </header>
    <main class="container">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 75%;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
        </div>




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