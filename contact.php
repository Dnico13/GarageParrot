<?php
require_once './template/top.php';
require_once './pdo.php';


?>

<body>
    <header>
        <?php
        require_once './template/header.php';
        ?>
        <h1> Contactez-nous</h1>
    </header>
    <main>
        <div class=" container  text-center d-flex flex-column my-5">
            <div class="row">
                <div class="col-md-4">
                    <p>Vous voulez prendre un rdv, obtenir un devis,
                        avoir un renseignement?</p>
                    <p>Nos equipes sont là pour répondre à vos attentes.</p>
                    <p>Contactez-nous par télèphone:</p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <a href="tel:0605060704">06 05 06 07 04</a>

                    </p>
                    <P>Ou remplissez le formulaire afin que nous puissions revenir vers
                        vous.</P>
                    <p>A tres vite..</p>

                </div>
                <div class="col-md-8 d-flex flex-column">

                    <form class="formcontact" method="POST" action="function/sendContact.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="prenom">Prénom: </label>
                                <div>
                                    <input type="text" name="prenom" id="prenom" class="w-75" placeholder="John" require><br>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="nom">Nom:</label>
                                <div>
                                    <input type="text" name="nom" id="nom" require class="w-75" placeholder="Doe"><br>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="email">Email:</label>
                                <div>
                                    <input type="email" name="email" id="email" require class="w-75" placeholder="yxz@gmail.com"><br>
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <label for="telephone"> Tel:</label>
                                <div>
                                    <input type="tel" name="telephone" id="telephone" require minlength="10" maxlength="10" class="w-75" placeholder="0606060606"><br>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="message"></label>

                                <textarea name="message" id="message" class="col-md-8" cols="28" rows="5" require placeholder="Votre message.."></textarea><br>

                            </div>
                            <button onclick="return send()" type="submit" class="validcontact mb-1 mx-auto w-25 align-self-end" name="submit">Envoyer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <?php
        require_once './template/footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/alerte.js"></script>
</body>

</html>