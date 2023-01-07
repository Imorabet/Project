<?php
session_start();
if (!isset($_SESSION['nom']) && !isset($_SESSION['id'])) {
  header("Location:login.php");
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&family=Raleway:wght@100&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    nav a:hover {
      font-size: 1.1em;
      font-weight: 500;

    }
    #intro {
        background-image: url('Pics/leaf.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }
  </style>
</head>

<?php
if (isset($_GET['id_gw'])) {
  try {
    extract($_GET);
    include('dbconnexion.php');
    $re = $db->prepare("SELECT * FROM greenwork WHERE id_gw=$id_gw");
    $re->execute();
    $lines = $re->fetch();
  } catch (PDOException $eer) {
    die("Error while selectin " . $eer->getMessage());
  }
}
?>

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
      <a class="nav-link text-white" href="deconnecter.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
        </svg><i class="bi bi-box-arrow-right"></i></a>

    </div>
  </nav>
  <!-- content -->
  <div class="view">
    <!-- Mask & flexbox options-->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.4);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="mask rgba-gradient align-items-center">
            <!-- Content -->
            <div class="container">
              <!--Grid row-->
              <div class="col">
                <!--Grid column-->
                <div class="col-md-12 text-white" data-wow-delay="0.3s">
                  <div class="form-body">
                    <div class="col">
                      <div class="form-holder">
                        <div class="form-content">
                          <div class="container-fluid">
                            <br>
                            <h3 class="text-white">Modifier ce GreenWork !!</h3>
                            <br>
                            <p class="text-white">Entrer les informations suivantes</p>
                            <form class="requires-validation" novalidate method="POST" enctype="multipart/form-data">
                              <div class="container-fluid col-md-12 col-xl-12 mt-xl-12">
                                <div class="col-md-12">
                                  <input class="form-control" value="<?php echo $lines[2]; ?>" type="text" name="name" placeholder="Titre du Greenwork" required>
                                  <div class="valid-feedback">titre est bien!</div>
                                  <div class="invalid-feedback">le Titre est vide!!</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                  <textarea class="form-control" value="<?php echo nl2br(htmlspecialchars($lines[3])); ?>" name="ing" id="exampleFormControlTextarea1" rows="3" placeholder="Les ingredients" required></textarea>
                                  <div class="valid-feedback">les ingredients est bien!</div>
                                  <div class="invalid-feedback">les ingredients est vide!!</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                  <textarea class="form-control" value="<?php echo nl2br(htmlspecialchars($lines[4])); ?>" name="desc" id="exampleFormControlTextarea1" rows="7" placeholder="la description" required></textarea>
                                  <div class="valid-feedback">la description est bien!</div>
                                  <div class="invalid-feedback">la description est vide!!</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                  <input class="form-control" value="<?php echo $lines[5][1]; ?>" type="file" name="img[]" id="formFileMultiple" multiple required>
                                  <div class="valid-feedback">les fichiers sont bien!</div>
                                  <div class="invalid-feedback">le fichier doit etre une image (6 images seulement) !!</div>
                                </div>
                              </div>
                              <div class="form-button mt-3">
                                <button id="submit" name="submit" type="submit" class="btn btn-success">Modifier</button>
                              </div>
                            </form>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                              extract($_POST);
                              $targee = "./temppics/";
                              $images = $_FILES['img']['name'];
                              $file = implode(',', $images);
                              foreach ($images as $k => $v) {
                                $targetpath = $targee . $v;
                                move_uploaded_file($_FILES['img']['tmp_name'][$k], $targetpath);
                              }
                              include('dbconnexion.php');
                              $re = $db->prepare("UPDATE greenwork SET id=?,title=?,ing=?,description=?,pic=?");
                              $re->execute([$_SESSION['id'], $name, $ing, $desc, $file]);
                            }
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--Grid row-->
            </div>
            <!-- Content -->
          </div>
        </div>
      </div>
      <!-- Mask & flexbox options-->
    </div>
  </div>

  <!-- footer -->
  <footer class="navbar mt-auto py-3 bg-light">
    <div class="container-fluid">
      <span class="text-muted">GreenWorks 2022/2021</span>
      <a class="navbar-brand" href="Homepage.php">Acceuil</a>
    </div>
  </footer>
  <script>
    (function() {
      'use strict'
      const forms = document.querySelectorAll('.requires-validation')
      Array.from(forms)
        .forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>