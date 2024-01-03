<div class="container d-flex flex-row">
    <div class="row justify-content-center align-items-center">
        <div class="card-group  mb-2">





            <?php
            


            foreach ($listCars as $key =>  $listCar) { ?>
                <div class="col-md-6 col-12">
                    <div class="card mx-1 my-1">

                        <img src="<?= htmlentities($listCar["picture"]); ?>" class="card-img-top imgcard" alt="..." width="5%">
                        <div class="card-body fontcardbody ">
                            <h5 class="card-title"><?= htmlentities($listCar["marque"]); ?></h5>
                            <p class="card-text"><?= htmlentities($listCar["modele"]); ?></p>
                        </div>
                        <div class="card-footer text-end bgcard">
                            <a href="detailvente.php?id=<?= $key ?>" class="btn ">En savoir +</a>
                            <a href="contactvehicule.php?id=<?= $key ?>" class="btn ">Prendre RDV</a>
                        </div>
                    </div>

                </div>

            <?php }; ?>

        </div>


    </div>
</div>