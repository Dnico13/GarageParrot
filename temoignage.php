<?php
require_once 'pdo.php';
require_once './function/readTemoignage.php';
?>
<div class="container  d-flex flex-column justify-content-center align-items-center containertemoignage">

    <div class="col col-md-12 mx-3">
        <h4 class="text-center">Nos Clients vous parlent de nous:</h4>
    </div>
    <div class="col col-md-12">
        <p class="colorfonttemoignage text-center">
            <?php
                
                $readTemoignages= readTemoignages($pdo);
                echo "{$readTemoignages['nom_temoignage']}:";
                echo ('<br>');
                echo $readTemoignages['avis'];
                echo ('<br>');
                echo "{$readTemoignages['note']} / 5";
            ?>

        </p>
    </div>
    <div class="col-md-12 text-end">
        <button class="btn  btn-sm  buttoncommentaire ">
            <a class="btncommentaire " href="commentaire.php">
                Laissez un commentaire.
            </a>
        </button>
    </div>

</div>