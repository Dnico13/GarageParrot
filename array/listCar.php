<?php


    foreach ($listCars as $key =>  $listCar) { ?>
   
    <div class="col">
    <div class="card-group">
        <div class="card" style="width: 18rem;">
            <img src="<?= $listCar["image"];?>" class="card-img-top" alt="..." width="10%">
            <div class="card-body">
                <h5 class="card-title"><?= $listCar["Modele"];?></h5>
                <p class="card-text"><?= $listCar["Description"];?></p>
                <a href="detailvente.php?id=<?=$key?>" class="btn btn-primary">En savoir +</a>
            </div>
        </div>
    </div>
 <?php };

 ?>
  

