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
        <button onclick="alert()">
            Classer par prix .
        </button>




    </main>
    <footer>
        <?php
        require_once './template/admin_footer.php';
        ?>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/requeteajax.js"></script>
    <script src="js/delete_Alerte.js"></script>
</body>

</html>