<?php
session_start();
require_once './template/top.php';
require_once './function/readHoraires.php';
require_once './function/readReparation.php';
require_once './function/readServices.php';
require_once './function/readUsers.php';
require_once './function/readListCar.php';
require_once './function/readMessage.php';
require_once './function/readTemoignage.php';

$readMessages = readMessages($pdo);
$readHoraires = readHoraires($pdo);
$readReparations = readReparations($pdo);
$readServices = readServices($pdo);
$Employes = readUsers($pdo);
$listCars = getlistCars($pdo);
$readAviss = readAviss($pdo);
//echo '<pre>';
//var_dump($_SESSION);
//echo '</pre>';

IF (!isset($_SESSION['role'])){
    header('location: http://www.google.fr');
}
?>

<body>
    <header>
        <?php
        require_once './template/admin_header.php';
        ?>

    </header>
    <main class="container h6">
    <?php    
    IF ($_SESSION['role'] === "Admin"){?>

            <!-- Debut partie gestion user-->
            <div class="row">
                <h3 class="text-center  text-primary mb-3">Grille des Utilisateurs </h3>
            </div>
            <div class="row">

                <p class="text-center">
                    <a href="newUsers.php" class="btn btn-success">Création d'un gestionnaire.</a>
                </p>

                <table class="table table-bordered   table-striped  w-75 mx-auto">
                    <thead class="text-primary">
                        <tr>

                            <th>Email:</th>

                            <th>Role:</th>
                            <th colspan="2"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Employes as $key => $User) { ?>
                            <tr>

                                <td class="fw-bold"> <?= htmlentities($User['email_employes']); ?> </td>

                                <td> <?= htmlentities($User['role']); ?> </td>

                                <td class="text-center">
                                    <form action="upDateUsers.php" method="GET">
                                        <button class="btn btn-secondary " type="submit" value="<?= $key; ?>" name="id">Modifier</button>
                                    </form>
                                </td>
                                <!-- integration du boutton suppression directement sur la partie admin-->
                                <td class="text-center">
                                    <form action="function/delete_Users.php" method="GET">
                                        <button onclick=" return del()" class="btn btn-secondary " type="submit" value="<?= htmlentities($User['id']); ?>" name="id">Supprimer</button>
                                    </form>
                                </td>


                                <!-- fin de l integration du boutton de suppression -->

                            </tr>
                            <?php }; ?>


                    </tbody>
                </table>
            </div>
        <?php } ?>
        <!-- fin partie gestion user -->
    
    
    <?php
    IF ($_SESSION['role'] === "Admin"||$_SESSION['role']=== "Employe"){?>

    <!-- gestion des messages -->

    <div class="row">
        <h3 class="text-center  text-primary  mt-3 mb-4">Gestion des demandes de renseignements clients</h3>
    </div>
    <div class="row">

        <table class="table table-striped table-bordered w-75 mx-auto">
            <thead class="text-primary">
                <tr>

                    <th>Nom du client</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Objet</th>
                    <th>Message</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($readMessages as $key => $readMessage) { ?>
                    <tr>


                        <td class="fw-bold"> <?= htmlspecialchars($readMessage['nom']); ?> </td>
                        <td class="text-center"> <?= htmlspecialchars($readMessage['prenom']); ?> </td>
                        <td class="text-center"> <?= htmlspecialchars($readMessage['email']); ?> </td>
                        <td class="text-center"> <?= htmlspecialchars($readMessage['telephone']); ?> </td>
                        <td class="text-center"> <?= $readMessage['objet']; ?> </td>
                        <td class="text-center"> <?= htmlspecialchars($readMessage['message']); ?> </td>



                        <td class="text-center">
                            <form action="function/delete_Message.php" method="GET">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($readMessage['id_message']); ?>">
                                <button onclick=" return del()" class="btn btn-secondary" type="submit" >Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- fin de gestion des messages-->

    <!-- gestion des temoignage et avis clients -->
    <div class="row">
        <h3 class="text-center  text-primary  mt-3 mb-4"> Liste des Temoignages à consulter </h3>
    </div>
    <div class="row">

        <p class="text-center">
            <a href="createTemoignage.php" class="btn btn-success">Création d'un Temoignage receuilli</a>
        </p>

        <table class="table table-striped table-bordered w-75 mx-auto">
            <thead class="text-primary">
                <tr>

                    <th>Prénom</th>
                    <th class="text-center">Note</th>
                    <th class="text-center">Avis</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($readAviss as $key => $readAvis) { ?>
                    <tr>


                        <td class="fw-bold"> <?= htmlspecialchars($readAvis['nom_temoignage']); ?> </td>
                        <td class="text-center"> <?= htmlspecialchars($readAvis['note']); ?> </td>
                        <td class="text-center"> <?= htmlspecialchars($readAvis['avis']); ?> </td>


                        <?php
                        if ($readAvis['Validate'] === 0) { ?>
                            <td class="text-center">
                                <form action="function/validateTemoignage.php" method="POST">
                                    <input type="hidden" name="Validate" value="1">
                                    <input type="hidden" name="id_temoignage" value="<?= htmlspecialchars($readAvis['id_temoignage']); ?>">
                                    <div><button class="btn btn-secondary mb-1" type="submit" name="submit">Valider</button></div>
                                </form>
                            
                        <?php } else { ?>
                            <td class="text-center">
                            <?php } ?>

                        <!--<td class="text-center">-->
                            <form action="function/delete_Temoignage.php" method="GET">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($readAvis['id_temoignage']); ?>">
                                <button onclick=" return del()" class="btn btn-secondary" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

<?php };?>
    <!-- de la partie temoignage et avis clients-->
    <!-- Debut de la liste des services -->
    <?php
    IF ($_SESSION['role'] === "Admin"){?>
    <div class="row">
        <h3 class="text-center  text-primary  mt-3 mb-4">Liste des differents Services Proposés </h3>
    </div>
    <div class="row">

        <p class="text-center">
            <a href="createService.php" class="btn btn-success">Création d'un nouveau Service.</a>
        </p>



        <table class="table table-striped table-bordered w-75 mx-auto">
            <thead class="text-primary">
                <tr>

                    <th>Nom du Service:</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($readServices as $key => $readService) { ?>
                    <tr>


                        <td class="fw-bold"> <?= $readService['service']; ?> </td>


                        <td class="text-center">
                            <form action="function/delete_Service.php" method="GET">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($readService['id_service']); ?>">
                                <button onclick=" return del()" class="btn btn-secondary" type="submit">Supprimer</button>
                            </form>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- fin de la liste des services -->

    <!-- Debut de la liste des reparations -->
    <div class="row">
        <h3 class="text-center  text-primary  mt-3 mb-4">Liste des differentes Réparations Proposées </h3>
    </div>
    <div class="row">

        <p class="text-center">
            <a href="createReparation.php" class="btn btn-success">Création d'un nouvelle Réparation.</a>
        </p>



        <table class="table table-striped table-bordered w-75 mx-auto">
            <thead class="text-primary">
                <tr>

                    <th>Nature de la Reparation:</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($readReparations as $key => $readReparation) { ?>
                    <tr>


                        <td class="fw-bold"> <?= htmlspecialchars($readReparation['reparation']); ?> </td>


                        </td>
                        <td class="text-center">
                            <form action="./function/delete_Reparation.php" method="GET">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($readReparation['id_reparation']); ?>">
                                <button onclick=" return del()" class="btn btn-secondary" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- fin de la liste des reaparations -->

    <!-- affichage pour modification des horaires-->
    <div class="row">
        <h3 class="text-center  text-primary  mt-3 mb-4">Horaires d'ouverture du garage </h3>
    </div>
    <div class="row">

        <table class="table table-striped table-bordered w-75 mx-auto">
            <thead class="text-primary">
                <tr>

                    <th>Jour</th>
                    <th class="text-center">Horaires Matin</th>
                    <th class="text-center">Horaires Apres-Midi</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($readHoraires as $key => $readHoraire) { ?>
                    <tr>


                        <td class="fw-bold"> <?= htmlspecialchars($readHoraire['jour']); ?> </td>
                        <td class="text-center"> <?= htmlspecialchars($readHoraire['horaires_matin']); ?> </td>
                        <td class="text-center"> <?= htmlspecialchars($readHoraire['horaires_apm']); ?> </td>



                        <td class="text-center">
                            <form action="upDate_horaires.php" method="POST">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($readHoraire['id_horaires']); ?>">
                                <button class="btn btn-secondary" type="submit">Modifier</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Fin partie modification des horaires -->
   <?php }; 
   IF ($_SESSION['role']=== "Admin"|| $_SESSION['role']=== "Employe"){?>
   
   
    <!-- Debut de gestion des ventes des vehicules-->

    <div class="row">
        <h3 class="text-center  text-primary  mt-3 mb-4">Gestion des véhicules en vente</h3>
    </div>
    <div class="row">

        <p class="text-center">
            <a href="createCar.php" class="btn btn-success">Création d'un nouveau véhicule</a>
        </p>

        <table class="table table-striped table-bordered w-75 mx-auto">
            <thead class="text-primary ">
                <tr>

                    <th>Modele</th>
                    <th>Marque</th>
                    <th>Kilometre</th>
                    <th>Transmission</th>
                    <th>Carburant</th>
                    <th>Motorisation</th>
                    <th>Conso</th>
                    <th>Couleur</th>
                    <th>P.V.C</th>
                    <th>Nbre de portes</th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listCars as $key => $listCar) { ?>
                    <tr>


                        <td class="fw-bold"> <?= htmlspecialchars($listCar['modele']); ?> </td>
                        <td> <?= htmlspecialchars($listCar['marque']); ?> </td>
                        <td> <?= htmlspecialchars($listCar['kilometre']); ?> </td>
                        <td> <?= htmlspecialchars($listCar['boite']); ?> </td>
                        <td> <?= htmlspecialchars($listCar['energie']); ?> </td>
                        <td> <?= htmlspecialchars($listCar['motorisation']); ?> </td>
                        <td> <?= htmlspecialchars($listCar['consommation']); ?> </td>
                        <td> <?= htmlspecialchars($listCar['couleur']); ?> </td>
                        <td> <?= htmlspecialchars($listCar['prix']); ?> </td>
                        <td> <?= htmlspecialchars($listCar['porte']); ?> </td>

                        <td class="text-center">
                            <form action="function/delete_Car.php" method="GET">
                                <input type="hidden" name="Id" value="<?= htmlspecialchars($listCar['id_voitures']); ?>">
                                <button onclick=" return del()" class="btn btn-secondary" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- galerie photos -->
    <div class="row">
        <h3 class="text-center  text-primary  mt-3 mb-4">Galerie photo des vehicules</h3>
    </div>
    <div class="row">

        <table class="table table-striped table-bordered w-75 mx-auto">
            <thead class="text-primary ">
                <tr>

                    <th>Modele</th>
                    <th>Photo Principale</th>
                    <th>Photo 1</th>
                    <th>Photo 2</th>


                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listCars as $key => $listCar) { ?>
                    <tr class="text-center">


                        <td class="fw-bold"> <?= htmlspecialchars($listCar['modele']); ?> </td>
                        <td><img src=" <?= htmlspecialchars($listCar['picture']); ?> " class="w-25  rounded"></td>
                        <td><img src=" <?= htmlspecialchars($listCar['picture1']); ?>" class="w-25  rounded"> </td>
                        <td><img src=" <?= htmlspecialchars($listCar['picture2']); ?>" class="w-25  rounded"> </td>


                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- fin de la galerie photo-->


    <!-- fin de gestion des ventes des vehicules -->

    </main>
    <footer>
        <?php
        require_once './template/admin_footer.php';
        ?>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/alerte.js"></script>
</body>

</html>
<?php } ?>