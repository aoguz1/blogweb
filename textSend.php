<?php 
include 'baglan.php';
session_start();

$header=$_POST["textHeader"];
$github=isset($_POST["gitHub"]) ? $_POST["gitHub"] : "empty" ;
$content=$_POST["textContentt"];
$user=$_SESSION['user'];
echo "<br>".$header.$github."CONTENT:".$content."-".$user;

$ekle = $bag->ekle("text", "header,git,content,username",array("$header","$github","$content","$user"));


?>



