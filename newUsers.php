<?php
session_start();
require_once './template/top.php';
require_once 'pdo.php';
require_once 'function/createUsers.php';


?>

<body>
    <header>
        <?php
        require_once './template/admin_header.php';
        ?>

    </header>
    <Main>
        <!-- Debut creation des gestionnaires du site -->
        <form class="w-50 m-auto" action="newUsers.php" method="POST" target="_self">
            <div class="mb-3">
                <label for="email_employes" class="form-label">Email:</label>
                <input type="email" name="email_employes" class="form-control" id="Email">
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
                <button type="submit" class="btn btn-primary" name="submit">Envoi du formulaire</button>
            </div>
        </form>


        <!-- Validation d'envoi des donnees en methode $_Post-->

        <?php



        creatUser($pdo);


        ?>


    </Main>
    <footer>
        <?php
        require_once './template/admin_footer.php';
        ?>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>