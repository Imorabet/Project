<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&family=Raleway:wght@100&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
  <!-- content -->
  <style>
    .album {
      background-color: rgba(20, 108, 68, 0.1);
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
    .sth{
      overflow: hidden;
  text-overflow: ellipsis;

    }
    #pop{
      background-image: url("pics/protect.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

  </style>


  </head>

  <body>

    <main>

      <section class="py-7 text-center container w-100 h-50" id="pop">
        <div class="row py-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light text-white"><strong>Les GreenWorks</strong> </h1>
            <p class="lead text-white">Decouvrir nos creatives membres et plus sur leurs produits artisanals.</p>
          </div>
        </div>
      </section>

      <div class="album py-7 bg-light">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
            include('dbconnexion.php');
            $re = $db->prepare("SELECT * FROM greenwork");
            $re->execute();
            $rows = $re->fetchAll();
            foreach ($rows as $row) {
              $id=$row[0];
              $cars = explode(',', $row[5]);
                $arrlength = count($cars);
                $o = [];
                for ($x = 0; $x < $arrlength; $x++) {
                    $k = "./temppics/" . $cars[$x];
                    array_push($o, $k);}
              echo "<div class='col'>";
              echo "<div class='card shadow-sm'>";
              echo " <img class='bd-placeholder-img card-img-top' width='100%' height='225' src='$o[0]' role='img'>";
              echo "<div class='card-body'>";
              echo "<h4>$row[2]</h4><p class='card-text sth'>$row[3]</p>";
              echo "<div class='d-flex justify-content-between align-items-center'>";
              echo "<div class='btn-group'>";
              echo "<a href='details.php?id=$id' class='btn btn-sm btn-outline-success'>Details</a>";
              echo "</div></div></div></div> </div>";
            }
            ?>
          </div>

        </div>
      </div>
      </div>
      </div>


      </div>
      </div>
      </div>



    </main>


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