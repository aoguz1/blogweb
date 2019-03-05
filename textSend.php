<?php 
include 'baglan.php';
session_start();

$header=$_POST["textHeader"];
$github=isset($_POST["gitHub"]) ? $_POST["gitHub"] : "empty" ;
$content=isset($_POST["textContent"]) ? $_POST["textContent"] : "empty";
$user=$_SESSION['user'];
echo "<br>".$header.$github.$content.$user;

$ekle = $bag->ekle("text", "header,git,content,username",array("$header","$github","$content","$user"));


?>



