<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&family=Raleway:wght@100&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    .img-responsive {
        width: 300px;
        height: 210px;
    }

    .container-fluid {
        width: 85%;
        background: #fff;
        border-radius: 6px;
        margin-top: 30px;
        padding: 20px 60px 30px 40px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2)
    }

    body {
        background-color: rgba(20, 108, 68, 0.1);
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
    <!--content-->
    <?php
    if (isset($_GET['id'])) {
        extract($_GET);
        include('dbconnexion.php');
        try {
            $r = $db->prepare("SELECT * FROM GREENWORK WHERE id_gw=$id");
            $r->execute();
            $tbl = $r->fetch();
        } catch (PDOException $err) {
            die("error while selectin " . $err->getMessage()); //aww get ur shit together
        }
    }
    $idd = $tbl[1];
    $u = $db->prepare("SELECT nomcomplet FROM utilisateur where id=$idd");
    $u->execute();
    $well = $u->fetch();
    ?>
    <!-- images -->

    <div class='container-fluid'>
        <h4>Le GreenWork: <?php echo $tbl[2]; ?></h4>
        <h6>Realiser par <?php echo $well[0]; ?></h6>
        <div class='row match-to-row'>
            <!-- im1 -->
            <?php
                $cars = explode(',', $tbl[5]);
                $arrlength = count($cars);
                $o = [];
                for ($x = 0; $x < $arrlength; $x++) {
                    $k = "./temppics/" . $cars[$x];
                    array_push($o, $k);
                
                echo "<div class='col-4 padding-0'>
                <img src='$o[$x]' class='img-responsive border-0' alt=''>
            </div>";}
            ?>
        </div>
    </div>
    <div class='container-fluid'>
        <H5>Les ingredients :</H5>
        <p><?php echo nl2br(htmlspecialchars($tbl[3])); ?></p>
        <h5>La description:</h5>
        <p><?php echo nl2br(htmlspecialchars($tbl[4])); ?></p>
    </div>

    <!-- footer -->
    <footer class="navbar mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">GreenWorks 2022/2021</span>
            <a class="navbar-brand" href="Homepage.php">Acceuil</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>