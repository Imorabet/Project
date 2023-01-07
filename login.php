<?php include_once("loginvalidation.php"); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    #intro {
        background-image: url('Pics/bird.jpg');
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
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="container d-flex align-items-center justify-content-center text-center h-75">
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
                                                        <h3 class="text-white">Se connecter pour voir plus!!</h3>
                                                        <br>
                                                        <p class="text-white">Entrer vos informations</p>
                                                        <form class="requires-validation" novalidate method="POST">
                                                            <div class="container-fluid col-md-12 col-xl-8 mt-xl-8">
                                                                <div class="col-md-12">
                                                                    <input class="form-control" type="text" name="name" placeholder="Nom utilisateur" required>
                                                                </div>
                                                                <br>
                                                                <div class="col-md-12">
                                                                    <input class="form-control" type="password" name="password" placeholder="Mot de pass" required>
                                                                    <p class="text-danger">
                                                                        <?php if (@$name_err != 1) {
                                                                            echo @$name_err;
                                                                        } ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-button mt-3">
                                                                <button id="submit" name="submit" type="submit" class="btn btn-success">Se connecter</button>
                                                                <p class="text-danger">
                                                                    <?php if (@$password_err != 1) {
                                                                        echo @$password_err;
                                                                    } ?>
                                                                </p>
                                                            </div>
                                                            <div class="block">
                                                                <br>
                                                                <p>vous n'êtes pas membre, <a href="signup.php" class="text-success" style="text-decoration:none ; font-weight:bolder;"> devenez-en un </a> maintenant!!</p> <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
                                                            </div>
                                                        </form>

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
    <!-- footer -->
    <footer class="navbar mt-2 py-3 bg-light">
        <div class="container-fluid">
            <span class="text-muted">GreenWorks 2022/2021</span>
            <a class="navbar-brand" href="Homepage.php">Acceuil</a>
        </div>
    </footer>
</body>

</html>