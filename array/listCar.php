<div class="container d-flex flex-row">
    <div class="row">
        <div class="col">
            <div class="card-group mb-2">

                <?php


                foreach ($listCars as $key =>  $listCar) { ?>


                    <div class="card mx-1">
                        <img src="<?= $listCar["image"]; ?>" class="card-img-top" alt="..." width="5%">
                        <div class="card-body">
                            <h5 class="card-title"><?= $listCar["Modele"]; ?></h5>
                            <p class="card-text"><?= $listCar["Description"]; ?></p>
                        </div>
                        <div class="card-footer text-end">
                            <a href="detailvente.php?id=<?= $key ?>" class="btn btn-primary">En savoir +</a>
                            <a href="contactvehicule.php?id=<?= $key ?>" class="btn btn-primary">Prendre RDV</a>
                        </div>
                    </div>
                <?php };

                ?>
            </div>
        </div>
    </div>
</div>