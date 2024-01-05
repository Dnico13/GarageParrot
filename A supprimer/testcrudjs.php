<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Présentation des differents service du Garage Parrot à Toulouse.">

    <title>Garage Parot: Garage automobile dans la région toulousaine.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./asset/iconeGarageParrot.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


</head>

<body>
    <header>
        <?php
        require_once './template/header.php';
        ?>
        <script>
            document.querySelector('#services').style.color = "#FFFFFF";
        </script>
        <h1>Services</h1>
    </header>
    <main>
    <div class="form-group">
  <label for="rating">Note:</label>
  <div class="rating">
    <input type="radio" id="star5" name="rating" value="5" />
    <label for="star5" title="5 étoiles">
      <i class="fa fa-star"></i>
    </label>
    <input type="radio" id="star4" name="rating" value="4" />
    <label for="star4" title="4 étoiles">
      <i class="fa fa-star"></i>
    </label>
    <input type="radio" id="star3" name="rating" value="3" />
    <label for="star3" title="3 étoiles">
      <i class="fa fa-star"></i>
    </label>
    <input type="radio" id="star2" name="rating" value="2" />
    <label for="star2" title="2 étoiles">
      <i class="fa fa-star"></i>
    </label>
    <input type="radio" id="star1" name="rating" value="1" />
    <label for="star1" title="1 étoile">
      <i class="fa fa-star"></i>
    </label>
  </div>
</div>

    </main>
    <footer>
        <?php
        include_once './template/footer.php';
        ?>
    </footer>
    <script src="https://kit.fontawesome.com/4b6c72567e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/listServices2.js"></script>
</body>

</html>