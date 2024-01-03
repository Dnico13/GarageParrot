<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="...">

  <title>Garage Parot: Garage automobile dans la région toulousaine.</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="./asset/iconeGarageParrot.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <?php require_once './array/arrayCar.php';
  $id = $_GET['id'];

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

          <?php include_once './template/carousel.php'; ?>

        </div>

        <div class=" col-12 col-lg-8">

          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $listCars[$id]['Modele']; ?></h1>


          <div class="container d-flex flex-row justify-content-center">
            <div class="row">
              <ul class="col-6">
                <li>Année: 2016</li>
                <li>Km: 10 000</li>
                <li>Prix: 16 900 E</li>
                <li>Carburant: Diesel </li>
              </ul>
              <ul class="col-6">
                <li>Motorisation: 150 ch</li>
                <li>Conso: 6l/100</li>
                <li>Couleur: Grise</li>
                <li>Nre de Portes: 5</li>
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