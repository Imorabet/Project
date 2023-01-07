<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
    if (isset($_POST['submit'])) {
      $validName = "/^[a-zA-Z ]*$/";
      $validEmail = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
      $validUser = "/^[a-z]{4,}\d{1,}/";
      $uppercasePassword = "/^[A-Z]{4,}\d{4,}$/";
      // nom complet
      if (empty($nom)) {
        $nom_err = "Nom est vide";
      } else if (!preg_match($validName, $nom)) {
        $nom_err = "le nom doit contenir seulemment des lettres";
      } else {
        $nom_err = true;
      }
      //email
      if (empty($email)) {
        $email_err = "Email est vide";
      } else if (!preg_match($validEmail, $email)) {
        $email_err = "Email est invalid ";
      } else {
        $email_err = true;
      }
      //username
      if (empty($user)) {
        $user_err = "le nom d'utilisateur est vide";
      } else if (!preg_match($validUser, $user)) {
        $user_err = "le nom d'utilisateur doit contenir des nombres et des lettres";
      } else {
        $user_err = true;
      }
      if (empty($mdp1)) {
        $mdp1_err = "Le mot de passse est vide";
      } else if (!preg_match($uppercasePassword, $mdp1)) {
        $mdp1_err = "Le mot de passse doit contenir des lettres en majuscule apres des nombres";
      } else {
        $mdp1_err = true;
      }
      if (empty($mdp2)) {
        $mdp2_err = "La confirmation de mot de passe est vide";
      } else if ($mdp2 != $mdp1) {
        $mdp2_err = "Les mots de passe ne sont pas identiques";
      } else {
        $mdp2_err = true;
      }
      if ($nom_err === true && $user_err === true && $email_err === true && $mdp1_err === true && $mdp2_err === true) {
        $nom = htmlspecialchars($nom);
        include('dbconnexion.php');
        try {
          $request = $db->prepare("INSERT INTO utilisateur(nomcomplet,email,username,password) VALUES (:n,:e,:u,:p)");
          $request->execute([
            'n' => $nom,
            'e' => $email,
            'u' => $user,
            'p' => $mdp1
          ]);
          header('Location:login.php');
        } catch (PDOException $e) {
          die('Error of insertion ' . $e->getMessage());
        }
      }
      else{

      }
    }
  }
  ?>

</body>

</html>