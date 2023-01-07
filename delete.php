<?php
session_start();
if (!isset($_SESSION['nom']) && !isset($_SESSION['id'])) {
    header("Location:login.php");
}
?>
<?php
if (isset($_GET["id_gw"])) {
    try {
        extract($_GET);
        include('dbconnexion.php');
        $r = $db->prepare("DELETE FROM greenwork WHERE id_gw=$id_gw");
        $r->execute();
        header('Location:listofworks.php');
    } catch (PDOException $et) {
        die('error while deletin ' . $et->getMessage());
    }
}
?>