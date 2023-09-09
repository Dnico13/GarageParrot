<div class="containerfooter d-flex flex-row justify-content-between align-items-center">
    <button class="ContactButton">
        <a class="contactcolor" href="contact.php">
            Contact
        </a>
    </button>

    <!-- Button trigger modal -->
    <button type="button" class="btn btnmodale" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Les horaires d'ouverture.
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header colormodalheader">
                    <h5 class="modal-title" id="exampleModalLabel">Nos horaires d'ouverture.</h5>
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
                                                <th scope="row">Lundi:</th>
                                                <td>8H30-12H00</td>
                                                <td>14H00-17H30</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Mardi:</th>
                                                <td>8H30-12H00</td>
                                                <td>14H00-17H30</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Mercredi:</th>
                                                <td>8H30-12H00</td>
                                                <td>14H00-17H30</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jeudi:</th>
                                                <td>8H30-12H00</td>
                                                <td>14H00-17H30</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Vendredi:</th>
                                                <td>8H30-12H00</td>
                                                <td>14H00-17H30</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Samedi:</th>
                                                <td>J8H30-12H00</td>
                                                <td>FERME</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Dimanche:</th>
                                                <td colspan="2">FERME</td>
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