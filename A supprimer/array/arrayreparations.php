<?php

$arrayreparations = [ 'Diagnostic' , 'Motorisation' , 'Echappement' , 'Pare-Brise' , 'Carrosserie' , 'Boite de vitesse' , 'Embrayage', 'Recherche de Panne'];


foreach ($arrayreparations as $key => $reparation) {?>
    <li><?= $reparation?></li>
    
<?php } ?>