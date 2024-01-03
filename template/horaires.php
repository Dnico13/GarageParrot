<?php
require_once './pdo.php';


function readHoraires($pdo){
    try{
        $query= $pdo-> prepare("SELECT * FROM Horaires");
        $query -> execute();

        $readHoraires = $query-> fetchAll(PDO::FETCH_ASSOC);
        return $readHoraires;
    } catch (Exception $e){
        echo 'lecture des horaires impossibles';
    }

}

$readHoraires = readHoraires($pdo);


?>



<!-- Button trigger modal -->
<button type="button" class="btn btnmodale" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Horaires.
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header colormodalheader">
                <h5 class="modal-title" id="exampleModalLabel">Nos horaires d'ouvertures</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body colormodalbody">
                <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
                    <div class="row">
                        <div class="col">


                            <div class="horaires text-center">
                                <table class="table  table striped colortable">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Matin</th>
                                            <th scope="col">Apres-midi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?= $readHoraires["0"]["jour"]; ?>:</th>
                                            <td><?= $readHoraires["0"]["horaires_matin"]; ?></td>
                                            <td><?= $readHoraires["0"]["horaires_apm"]; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= $readHoraires['1']['jour']; ?>:</th>
                                            <td><?= $readHoraires['1']['horaires_matin']; ?></td>
                                            <td><?= $readHoraires['1']['horaires_apm']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= $readHoraires['2']['jour']; ?>:</th>
                                            <td><?= $readHoraires['2']['horaires_matin']; ?></td>
                                            <td><?= $readHoraires['2']['horaires_apm']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= $readHoraires['3']['jour']; ?>:</th>
                                            <td><?= $readHoraires['3']['horaires_matin']; ?></td>
                                            <td><?= $readHoraires['3']['horaires_apm']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= $readHoraires['4']['jour']; ?>:</th>
                                            <td><?= $readHoraires['4']['horaires_matin']; ?></td>
                                            <td><?= $readHoraires['4']['horaires_apm']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= $readHoraires['5']['jour']; ?>:</th>
                                            <td><?= $readHoraires['5']['horaires_matin']; ?></td>
                                            <td><?= $readHoraires['5']['horaires_apm']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= $readHoraires['6']['jour']; ?>:</th>
                                            <td><?= $readHoraires['6']['horaires_matin']; ?></td>
                                            <td><?= $readHoraires['6']['horaires_apm']; ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btnmodale" data-bs-dismiss="modal">OK</button>

                </div>
            </div>
        </div>
    </div>
</div>
</div>