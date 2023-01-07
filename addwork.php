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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&family=Raleway:wght@100&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<style>
    #intro {
        background-image: url('Pics/oneworld.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
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
                                                        <h3 class="text-white">Ajouter des GreenWorks et partager la creativite !!</h3>
                                                        <br>
                                                        <p class="text-white">Entrer les informations suivantes</p>
                                                        <form class="requires-validation" novalidate method="POST" enctype="multipart/form-data">
                                                            <div class="container-fluid col-md-12 col-xl-12 mt-xl-12">
                                                                <div class="col-md-12">
                                                                    <input class="form-control" type="text" name="name" placeholder="Titre du Greenwork" required>
                                                                    <div class="valid-feedback">titre est bien!</div>
                                                                    <div class="invalid-feedback">le Titre est vide!!</div>
                                                                </div>
                                                                <br>
                                                                <div class="col-md-12">
                                                                    <textarea class="form-control" name="ing" id="exampleFormControlTextarea1" rows="2" placeholder="Les ingredients" required></textarea>
                                                                    <div class="valid-feedback">les ingredients est bien!</div>
                                                                    <div class="invalid-feedback">les ingredients est vide!!</div>
                                                                </div>
                                                                <br>
                                                                <div class="col-md-12">
                                                                    <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="5" placeholder="la description" required></textarea>
                                                                    <div class="valid-feedback">la description est bien!</div>
                                                                    <div class="invalid-feedback">la description est vide!!</div>
                                                                </div>
                                                                <br>
                                                                <div class="col-md-12">
                                                                    <input class="form-control" type="file" name="img[]" id="formFileMultiple" multiple required>
                                                                    <div class="valid-feedback">les fichiers sont bien!</div>
                                                                    <div class="invalid-feedback">le fichier doit etre une image (6 images seulement) !!</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-button mt-3">
                                                                <button id="submit" name="submit" type="submit" class="btn btn-success">Ajouter</button>


                                                            </div>

                                                        </form>
                                                        <?php
                                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                            // extract($_POST);
                                                            // for ($i = 0; 6>=$i; $i++) {
                                                            //     $org_name = $_FILES['img']['name'][$i];
                                                            //     $location = "./temppics/".$org_name;
                                                            //     $extension = pathinfo($location, PATHINFO_EXTENSION);

                                                            //     $extension = strtolower($extension);


                                                            //     $valid_extension = array("png","jpeg","jpg","ico","gif");

                                                            //     if(in_array($extension, $valid_extension)) {

                                                            //         // Upload file
                                                            //         if(move_uploaded_file($_FILES['img']['tmp_name'][$i],$location)){

                                                            //             try {
                                                            //                 include('dbconnexion.php');
                                                            //                 $req = $db->prepare('INSERT INTO greenwork(id,title,ing,description,pic) values (?,?,?,?,?)');
                                                            //                 $req->execute([$_SESSION['id'],$name, $ing, $desc,$location]);
                                                            //                 //header('Location:listofworks.php');
                                                            //             } catch (PDOException $e) {
                                                            //                 die('error while insertin infos ' . $e->getMessage());
                                                            //             }
                                                            //         }
                                                            //         }
                                                            //     }
                                                            // }
                                                            // if(isset($_POST['submit'])){
                                                            //     extract($_POST);
                                                            //     $uploadsDir = "./temppics/";
                                                            //     $allowedFileType = array('jpg','png','jpeg','ico');

                                                            //     // Velidate if files exist
                                                            //     if (!empty(array_filter($_FILES['img']['name']))) {

                                                            //         // Loop through file items
                                                            //         foreach($_FILES['img']['name'] as $id=>$val){
                                                            //             // Get files upload path
                                                            //             $fileName        = $_FILES['img']['name'][$id];
                                                            //             $tempLocation    = $_FILES['img']['tmp_name'][$id];
                                                            //             $targetFilePath  = $uploadsDir . $fileName;
                                                            //             $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                                                            //            // $uploadDate      = date('Y-m-d H:i:s');
                                                            //             $uploadOk = 1;
                                                            //             if(in_array($fileType, $allowedFileType)){
                                                            //                     if(move_uploaded_file($tempLocation, $targetFilePath)){
                                                            //                             $sqlVal = [$_SESSION['id'],$name,$ing,$desc,$fileName];
                                                            //                     } else {
                                                            //                         $response = array(
                                                            //                             "status" => "alert-danger",
                                                            //                             "message" => "File coud not be uploaded."
                                                            //                         );
                                                            //                     }

                                                            //             } else {
                                                            //                 $response = array(
                                                            //                     "status" => "alert-danger",
                                                            //                     "message" => "Only .jpg, .jpeg and .png file formats allowed."
                                                            //                 );
                                                            //             }
                                                            //             // Add into MySQL database
                                                            //             if(!empty($sqlVal)) {
                                                            //                 include('dbconnexion.php');
                                                            //                 $insert = $db->prepare("INSERT INTO greenwork(id,title,ing,description,pic) VALUES(?,?,?,?,?)");
                                                            //                 $insert->execute($sqlVal);
                                                            //                 if($insert) {
                                                            //                     $response = array(
                                                            //                         "status" => "alert-success",
                                                            //                         "message" => "Files successfully uploaded."
                                                            //                     );
                                                            //                 } else {
                                                            //                     $response = array(
                                                            //                         "status" => "alert-danger",
                                                            //                         "message" => "Files coudn't be uploaded due to database error."
                                                            //                     );
                                                            //                 }
                                                            //             }
                                                            //         }
                                                            //     } else {
                                                            //         // Error
                                                            //         $response = array(
                                                            //             "status" => "alert-danger",
                                                            //             "message" => "Please select a file to upload."
                                                            //         );
                                                            //     }
                                                            // } }
                                                            extract($_POST);
                                                            $cou=count($_FILES['img']['name']);
                                                            if($cou>6) echo 'pas 6';
                                                            else{
                                                            $targee = "./temppics/";
                                                            $images = $_FILES['img']['name'];
                                                            $file = implode(',', $images);
                                                            foreach ($images as $k => $v) {
                                                                $targetpath = $targee . $v;
                                                                move_uploaded_file($_FILES['img']['tmp_name'][$k], $targetpath);
                                                            }
                                                            include('dbconnexion.php');
                                                            $re = $db->prepare("INSERT INTO greenwork(id,title,ing,description,pic) VALUES(?,?,?,?,?)");
                                                            $re->execute([$_SESSION['id'], $name, $ing, $desc, $file]);
                                                        }}
                                                        // if(isset($_POST['mailSend'])){
                                                        //     $statement = $db->prepare("SHOW TABLE STATUS LIKE 'mail'");
                                                        //     $statement->execute();
                                                        //     $result = $statement->fetchAll();
                                                        //         foreach($result as $row)
                                                        //             $new_id = $row[10]; //10 fixed
                                                        //     $i=0;	
                                                        //     foreach ($_FILES['attached']['name'] as $up_filename) {
                                                        //         $i++;
                                                        //             //$up_filename=$_FILES["attached"]["name"];
                                                        //         $file_basename = substr($up_filename, 0, strripos($up_filename, '.')); // strip extention
                                                        //         $file_ext = substr($up_filename, strripos($up_filename, '.')); // strip name
                                                        //         $f1 = $new_id .'-'.[$i]. $file_ext;

                                                        //         if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif'))
                                                        //             throw new Exception("Only jpg, jpeg, png and gif format images are allowed to upload.");

                                                        //             move_uploaded_file($_FILES["attached"]["tmp_name"],"../uploads/mail/" . $f1);
                                                        //         // End attached file
                                                        //         }
                                                        //             $statement = $db->prepare("INSERT INTO mail (orderNo,attached) VALUES (?,?)");
                                                        //             $statement->execute(array($_POST['orderNo'],$f1));
                                                        //     }
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