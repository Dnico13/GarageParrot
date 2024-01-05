<?php
session_start();
require_once './template/top.php';
require_once 'pdo.php';
require_once './function/readTemoignage.php';
require_once './log/login.php';
?>

<body>
    <header>
        <?php
        require_once './template/header.php';
        ?>
        <script>
            document.querySelector('#connexion').style.color = "#FFFFFF";
        </script>
        <h1>Formulaire de Connexion</h1>
    </header>


    <main class="mainconnexion">
        <form class="containerconnexion" method="POST">
            <div class="row mb-3 form2">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10 ">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
    </main>
    <footer>
        <?php
        require_once './template/footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>