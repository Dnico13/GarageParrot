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
  </header>
  <main>
    <article class="container d-flex flex-row justify-content-center ">
      <div class="row">
        <div class="col-md-4  mx-0 my-2">
          <div class="card w-75 ">
            <img src="./asset/PicCar/aircross/aircross1.jpg" >
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="btn btn-primary text-end">Go somewhere</a>
          </div>
        </div>
        <div class="col-md-4  my-2">
          <div class="card w-75">
            <img src="./asset/PicCar/aircross/aircross1.jpg">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="btn btn-primary text-end">Go somewhere</a>
          </div>
        </div>
        <div class="col-md-4 my-2">
          <div class="card w-75">
            <img src="./asset/PicCar/aircross/aircross1.jpg">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="btn btn-primary text-end">Go somewhere</a>
          </div>
        </div>
      </div>




      </div>
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