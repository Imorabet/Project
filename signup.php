<?php include("signupvalidation.php"); ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>
  #intro {
    background-image: url('Pics/go green.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
  }

  span a {
    text-decoration: none;
  }

  nav a:hover {
    font-size: 1.1em;
    font-weight: 500;

  }
</style>

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
  <!-- form -->
  <div class="view">
    <!-- Mask & flexbox options-->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
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
                            <h3 class="text-white">Devenir un membre en une seul etape !</h3>
                            <br>
                            <p class="text-white">Entrer vos informations:</p>
                            <form class="requires-validation" method="POST">
                              <div class="container-fluid col-md-12 col-xl-8 mt-xl-8">
                                <div class="col-md-12">
                                  <input type="text" name="nom" class="form-control" value="<?php echo @$nom;?>" id="validationServer01" placeholder="Nom complet">
                                  <p class="text-danger">
                                    <?php if (@$nom_err != 1) {
                                      echo @$nom_err;
                                    } ?>
                                  </p>

                                </div>

                                <div class="col-md-12">
                                  <input type="text" name="user" class="form-control" value="<?php echo @$user;?>"id="validationServer02" placeholder="Nom d'utilisateur">
                                  <p class="text-danger">
                                    <?php if (@$user_err != 1) {
                                      echo @$user_err;
                                    } ?>
                                  </p>
                                </div>

                                <div class="col-md-12">
                                  <input type="email" name="email" class="form-control" value="<?php echo @$email;?>" id="validationServer03" placeholder="Email">
                                  <p class="text-danger">
                                    <?php if (@$email_err != 1) {
                                      echo @$email_err;
                                    } ?>
                                  </p>
                                </div>

                                <div class="col-md-12">
                                  <input class="form-control" name="mdp1" type="password" value="<?php echo @$mdp1;?>" id="validationServer04" placeholder="Mot de pass">
                                  <p class="text-danger ">
                                    <?php if (@$mdp1_err != 1) {
                                      echo @$mdp1_err;
                                    } ?>
                                  </p>
                                </div>

                                <div class="col-md-12">
                                  <input class="form-control" name="mdp2" type="password" value="<?php echo @$mdp2;?>" id="validationServer05" placeholder="Confirm Mot de pass">
                                  <p class="text-danger">
                                    <?php if (@$mdp2_err != 1) {
                                      echo @$mdp2_err;
                                    } ?>
                                  </p>
                                </div>
                              </div>
                              <div class="form-button mt-3">
                                <button id="liveToastBtn" type="submit" name="submit" class="btn btn-success">Creer un compte</button>
                              </div>
                            </form>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Grid column-->
                <!--Grid column 
                    <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                        <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.webp" alt="" class="img-fluid">
                    </div>
                    Grid column-->
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

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