<?php
session_start();
try{
    session_unset();
    session_destroy();
    header('Location:login.php');
}catch(Exception $e){
    die('error while loging out '.$e->getMessage());
}
?>