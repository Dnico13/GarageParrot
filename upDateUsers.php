<?php
session_start();
require_once './pdo.php';
require_once './template/top.php';
require_once 'function/readUsers.php';

$Employes = readUsers($pdo);
$id = intval($_GET['id']);

?>

<body>

    <header>
        <?php
        require_once './template/admin_header.php';
        ?>

    </header>
    <main class="container">

        <div class="text-center h2 mb-3">
            Modification d'un Gestionnaire
        </div>

        <form class="w-50 m-auto" action="function/majUsers.php" method="POST">
            <div class="mb-3">
                <label for="email_employes" class="form-label">Email:</label>
                <input type="email" name="email_employes" class="form-control" id="Email" placeholder="<?= $Employes[$id]['email_employes']; ?>">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role:</label>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="role" id="role">
                    <option selected class="active">Choisir un Role ci dessous:</option>
                    <option value="Admin">Administrateur</option>
                    <option value="Employe">Employé</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="text-end">
                <input type="hidden" name="id" id="id" value="<?= $Employes[$id]['id']; ?>">
            </div>
            <div class="text-end">

                <button onclick=" return mod()" type="submit" class="btn btn-primary" name="submit">Validation des modifications</button>
            </div>
        </form>



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