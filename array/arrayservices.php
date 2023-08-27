<?php

$arrayServices = ['Climatisation' , 'Forfait Vidange' , 'Changement des filtres' , 'Vidange  boite de vitesse' , 'Changement de Pneumatiques'];


foreach ($arrayServices as $key => $Service) {?>
    <li><?=$Service?></li>
<?php } ?>