  <?php
  

  require_once 'pdo.php';
  require_once 'function/readListCar.php';
  
require_once './function/readTemoignage.php';
  $listCars = getlistCars($pdo);

  $id_voitures = $_GET['id'];

  require_once './template/top.php';

  ?>
  </head>

  <body>
    <header>
      <?php
      require_once './template/header.php';
      ?>
      <script>
        document.querySelector('#ventes').style.color = "#FFFFFF";
      </script>
      <h1> Details du Vehicule</h1>
    </header>
    <main>
      <div class="container">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-12  col-lg-4">

            <?php require_once './template/carousel.php'; ?>

          </div>


          <div class=" col-12 col-lg-8">

            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $listCars[$id_voitures]['marque'] . " " . $listCars[$id_voitures]['modele']; ?></h1>

            <div class="container d-flex flex-row justify-content-center ">
              <div class="row">
                <ul class="col-6">
                  <li>Année: <?= $listCars[$id_voitures]['annee']; ?></li>
                  <li>Km: <?= $listCars[$id_voitures]['kilometre']; ?></li>
                  <li>Prix: <?= $listCars[$id_voitures]['prix']; ?> Euros</li>
                  <li>Carburant: <?= $listCars[$id_voitures]['energie']; ?> </li>
                </ul>
                <ul class="col-6">
                  <li>Motorisation: <?= $listCars[$id_voitures]['motorisation']; ?></li>
                  <li>Conso: <?= $listCars[$id_voitures]['consommation']; ?></li>
                  <li>Couleur: <?= $listCars[$id_voitures]['couleur']; ?></li>
                  <li>Nbre de Portes: <?= $listCars[$id_voitures]['porte']; ?></li>
                </ul>


              </div>
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
    <script src="app.js"></script>
  </body>

  </html>