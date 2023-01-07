<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&family=Raleway:wght@100&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    .linkstyling {
      text-decoration: none;
    }



    .stylling {
      font-family: 'Raleway';
      /* font-weight: bold; */

    }

    #bah {
      background-image: url("pics/ppl.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    nav a:hover {
      font-size: 1.1em;
      font-weight: 500;

    }
  </style>
</head>


<body>
  <!-- the menu bar -->
  <nav class="navbar sticky navbar-light bg-success">
    <div class="container">
      <p class="navbar-brand text-white styling">
        <strong>GreenWorks</strong>
      </p>
      <a class="nav-link active text-white" href="globallistofworks.php">Les GreenWorks</a>
      <a class="nav-link text-white" href="login.php">Mes GreenWorks</a>
      <a class="nav-link text-white" href="whoarewe.php">Qui sommes Nous</a>
      <a class="nav-link text-white" href="contactus.php">Contactez-nous</a>
    </div>
  </nav>
  <!-- sliders -->
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" id="bah">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal text-white">Bienvenue chez nous</h1>
      <p class="lead fw-normal text-white">GreenWorks est une association de protection de l'environnement.    </p>
      <a class="btn btn-success" href="whoarewe.php">decovrir plus sur nous!</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <!-- articles -->
  <div class="container-fluid">
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-8">
        <br>
        <h2 class="featurette-heading fw-normal lh-1">Les glaciers de l’Antarctique <span class="text-muted">n’ont jamais fondu </span>aussi vite depuis des millénaires </h2>
        <p class="lead">une plume de chaleur, disent les experts -- qui s'annonce record. Probablement un effet du réchauffement climatique anthropique. Et à l'autre bout du monde, du côté de l'Antarctique, une autre manifestation de ces changements induits par les Hommes :
          des glaciers qui fondent comme jamais depuis plusieurs millénaires.</p>
        <br>
        <a href="https://www.futura-sciences.com/planete/actualites/antarctique-glaciers-antarctique-nont-jamais-fondu-aussi-vite-depuis-millenaires-98990/" class="margin-3  btn btn-outline-success ">Voir plus</a>

      </div>
      <div class="col-md-4">
        <img class="bd-placeholder-img bd-placeholder-img-lg img-thumbnail featurette-image img-fluid mx-100" width="500" height="400" src="pics/glaciers.jpg" role="img" focusable="false">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-8 order-md-2">
        <br>
        <h2 class="featurette-heading fw-normal lh-1">Bretagne: La justice interdit encore <span class="text-muted">l’abattage de milliers de choucas.</span></h2>
        <p class="lead">Le tribunal administratif a suspendu l’arrêté pris par trois préfets en Bretagne autorisant l’abattage d’environ 25.000 choucas des tours.</p>
        <br>
        <a href="https://www.20minutes.fr/planete/3308119-20220614-bretagne-justice-interdit-encore-abattage-milliers-choucas" class="margin-3 btn btn-outline-success ">Voir plus</a>
      </div>
      <div class="col-md-4 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg img-thumbnail featurette-image img-fluid mx-100" width="500" height="400" src="pics/choucas.jpg" role="img" focusable="false">


      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-8">
        <br>
        <h2 class="featurette-heading fw-normal lh-1">Canicule : plusieurs régions de France<span class="text-muted"> en alerte pour pollution à l’ozone.</span></h2>
        <p class="lead">Une forte concentration d’ozone dans l’air est attendue en région parisienne et dans l’Est de la France.</p>
        <br>
        <a href="https://www.tf1info.fr/environnement-ecologie/canicule-plusieurs-regions-de-france-en-alerte-pour-pollution-a-l-ozone-ile-de-france-rhone-alpes-2223360.html" class="margin-3 btn btn-outline-success ">Voir plus</a>
      </div>
      <div class="col-md-4">
        <img class="bd-placeholder-img bd-placeholder-img-lg img-thumbnail featurette-image img-fluid mx-100" width="500" height="400" src="pics/airrpollution.jpg" role="img" focusable="false">

      </div>
    </div>

    <hr class="featurette-divider">
  </div>
  <!-- footer -->

  <footer class="navbar mt-auto py-3 bg-light">
    <div class="container-fluid">
      <span class="text-muted">GreenWorks 2022/2021</span>
      <a class="navbar-brand" href="Homepage.php">Acceuil</a>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>