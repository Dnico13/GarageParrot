<nav class="container-fluid d-flex flex-row mt-1">
    <a href="accueil.php"><img src="./asset/iconeGarageParrot.jpg" class="LogoHeader"></a>
    <div class="container-fluid d-flex flex-row justify-content-center">
        <h1>Bienvenu sur votre Interface d'Administration.</h1>
    </div>

    <form action="./log/logout.php" method="POST" class="align-self-end col-1 me-2 align-self-center">
        <input type="hidden" name="logout" value="">
        <button class="btn btn-outline-dark" type="submit" onclick=" return deco()">Déconnexion</button>
    </form>

</nav>