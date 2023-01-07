<?php
try{
    $db=new PDO("mysql:host=localhost;dbname=project;charset=utf8","root","",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
}
catch(PDOException $excep){
    die("Error while connectin :".$excep->getMessage());
}


?>