<?php
session_start();
require_once 'pdo.php';
require_once './template/top.php';





function upDateHoraires($pdo)
{
    try {



        $update_id = $_POST['id'];
        $query = $pdo->prepare("SELECT * FROM Horaires where id_horaires= :id ");

        $query->bindParam(':id', $update_id);
        $query->execute();
        $upDateHoraires = $query->fetch(PDO::FETCH_ASSOC);
        return $upDateHoraires;
    } catch (PDOException $e) {
        echo "il y a un soucis";
    }
}
$upDateHoraires = upDateHoraires($pdo);

?>

<body>
    <header>
        <?php
        require_once './template/admin_header.php';
        ?>

    </header>
    <main class="container">
        <div class="row">
            <h3 class="text-center  text-primary  mt-3 mb-4">Horaires d'ouverture du garage </h3>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered backgroungarray">
                <thead class="text-primary">
                    <tr>

                        <th>Jour</th>
                        <th>Horaires du Matin</th>
                        <th>Horaires d'Apres-midi</th>

                    </tr>
                </thead>
                <tbody>

                    <form action="function/maj_horaires.php" method="POST">
                        <tr>
                            <td>
                                <?= $upDateHoraires['jour']; ?>
                                <input type="hidden" name="id_horaires" value="<?= $upDateHoraires['id_horaires']; ?>">
                            </td>

                            <td>
                                <input placeholder="<?= $upDateHoraires['horaires_matin']; ?>" name="horaires_matin" type="text" required>
                            </td>
                            <td>
                                <input placeholder="<?= $upDateHoraires['horaires_apm']; ?>" name="horaires_apm" type="text" required>
                            </td>


                </tbody>
            </table>
            <div class="text-end">
                <button onclick="return mod()" type="submit" class="btn btn-secondary"> Modifier</button>
            </div>

        </div>
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