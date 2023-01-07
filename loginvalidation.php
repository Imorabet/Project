<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
    if (isset($_POST['submit'])) {
        $validUser = "/^[a-z]{4,}\d{1,}/";
        $uppercasePassword = "/^[a-zA-Z]{4,}\d{4,}$/";
        // nom complet
        if (empty($name)) {
            $name_err = "le nom d'utilisateur est vide";
        } else if (!preg_match($validUser, $name)) {
            $name_err = "le nom d'utilisateur est invalid";
        } else {
            $name_err = true;
        }
        //email
        if (empty($password)) {
            $password_err = "Le mot de passse est vide";
        } else if (!preg_match($uppercasePassword, $password)) {
            $password_err = "Le mot de passse est invalid ";
        } else {
            $password_err = true;
        }
        if ($password_err === true && $name_err === true) {
            include("dbconnexion.php");
            try {
                $request = $db->prepare('SELECT * FROM utilisateur where username=:username and password=:password');
                $request->execute([
                    'username' => $name,
                    'password' => $password
                ]);
                $n = $request->rowCount();
                if ($n === 1) {
                    $infos=$request->fetch();   //recuperer les donnees de basedonne
                    session_start();
                    $_SESSION['nom']=$infos['nomcomplet'];
                    $_SESSION['id']=$infos['id'];
                    $_SESSION['id_se']=session_create_id();
                    $id=$_SESSION['id'];
                    header("Location:listofworks.php?id=$id");
                } else {
                    $password_err="Nom d'utilisateur ou mot de passe est incorrect";
                }
            } catch (PDOException $e) {
                die('error of selection ' . $e->getMessage());
            }
        }
    }
}
?>