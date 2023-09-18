<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Liste des vehicules vendues par le garage Parrot à Toulouse">

  <title>Garage Parot: Garage automobile dans la région toulousaine.</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="./asset/iconeGarageParrot.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body>
  <header>
    <?php
    require_once './template/header.php';
    ?>
    <script>
      document.querySelector('#ventes').style.color = "#FFFFFF";
    </script>
    <h1> Vente de vehicules</h1>
    <div class="container justify-content-around  text-center">
      <div class="row">
        <div class="col">
          <p> Prix</p>
          <button class="btn btn-primary" id="croissantprix"> Croissant </button>
          <button class="btn btn-primary" id="decroissantprix">Decroissant</button>
        </div>
        <div class="col">
          <p> Kilometrage</p>
          <button class="btn btn-secondary" id="croissantkm"> Croissant</button>
          <button class="btn btn-secondary" id="decroissantkm"> Decroissant</button>
        </div>
        <div class="col">
          <p> Année de mise en circulation</p>
          <div class="btn btn-danger" id="croissantid">Croissant</div>
          <div class="btn btn-danger" id="decroissantid">Decroissant</div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <main class="container justify-content-center">
      <article>
        <?php
        require_once './array/arrayCar.php';
        require_once './array/listCar.php';
        ?>
      </article>
      <section>
        <?php
        include 'temoignage.php';
        ?>
      </section>
    </main>
    <footer>
      <?php
      require_once './template/footer.php';
      ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/v"></script>
</body>

</html>