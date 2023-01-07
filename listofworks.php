<?php
session_start();
if (!isset($_SESSION["nom"]) && !isset($_SESSION["id"])) {
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

    body {
      background-color: rgba(20, 108, 68, 0.1);
    }

    .container-fluid {
      width: 85%;
      background: #fff;
      border-radius: 6px;
      margin-top: 30px;
      padding: 20px 60px 30px 40px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .ba {
      border-bottom: 1px solid #c2c2d6;
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
      <a class="nav-link text-white" href="deconnecter.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
        </svg><i class="bi bi-box-arrow-right"></i></a>
    </div>
  </nav>
  <!-- content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-9 padding-0">
        <h4>Bienvenue <?php echo $_SESSION['nom']; ?>!</h4>
      </div>
      <div class="col-3 padding-0">

        <a class="btn btn-success" href="addwork.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
          </svg><i class="bi bi-plus-square"></i> Ajouter un GreenWork</a>
      </div>

    </div>
    <br><br>
    <table>
      <?php
      if (isset($_GET['id'])) {
        extract($_GET);
        include('dbconnexion.php');
        $re = $db->prepare("SELECT * FROM greenwork WHERE id=$id");
        $re->execute();
        $lines = $re->fetchAll();
        foreach ($lines as $line) {
          $id = $line[0];
          $cars = explode(',', $line[5]);
          $arrlength = count($cars);
          $o = [];
          for ($x = 0; $x < $arrlength; $x++) {
            $k = "./temppics/" . $cars[$x];
            array_push($o, $k);
          }
          echo "<tr class='ba'>";
          echo "<tr><td rowspan='2'><img src='" . $o[0] . "' class='w-75'></td>";
          echo "<td><h6 >" . $line[2] . "</h6></td></tr>";
          echo "<td class='h-25'>" . $line[3] . "<br>" . $line[4] . "...</td>";
          //edit button n delete button
          echo "<td><a href='edit.php?id_gw=$id' class='btn btn-success'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
      </svg><i class='bi bi-pencil-square'></i></a><br><br>
        <a data-toggle='modal' data-target='#exampleModal' href='delete.php?id_gw=$id'class='btn btn-secondary'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
        <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
      </svg><i class='bi bi-trash3'></i></a></td>";
          echo "</tr>";
        }
        
      }
      ?>
    </table>










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