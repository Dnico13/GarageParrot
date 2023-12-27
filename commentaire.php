<?php
require_once './template/top.php';
?>


<body>
    <header>
        <?php
            require_once'./template/header.php';
        ?>
        <h1>Laissez un commentaire</h1>
    </header>
    <main>
        <!--<form class="formcommentaire">
                <div>
                        <label for="name">Nom</label>
                        <div>    
                            <input id="name" type="text" require>
                        </div>
                </div>

                <div>
                        <label for="note">Note sur 5 :</label>
                        <div>
                            <input id="note" type="range" min="0" max="5" step="0.5" require>
                        </div>
                </div>
                <div>
                        <label for="commentaire2"></label>    
                        <div>    
                            <textarea name="commentaire2" id="commentaire2" require>Commentaire</textarea>
                        </div>
                </div>

                <button  type="submit" class="validcom" name="submit">Envoyer</button>
        </form>-->
        <form class="formcommentaire" action="..." method="POST">
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-10 ">
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
            </div>

            <div class="row mb-3">
                <label for="note" class="col-sm-2 col-form-label">Note:</label>
                    <div class="col-sm-10">
                        <input type="range" class="form-control" id="note">
                    </div>
            </div>
            <div>
                <label class="form-label" for="message">Message:</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
            </div>
            <button type="submit" class="btnEnvoiCom">Envoi</button>
        </form>
    </main>
    <footer>
        <?php
            require_once './template/footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>