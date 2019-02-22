<?php 
include 'baglan.php';
session_start();
$userID=$_GET["loginuser"];
$passwordID=$_GET["loginpassword"];



if (isset($userID) && isset($passwordID)) {

$user = $bag->cek("OBJ_ALL","info_users","*","WHERE name=?", array($userID));
$password = $bag->cek("OBJ_ALL","info_users","*","WHERE password=?", array($passwordID));

if ($user && $password) {
$_SESSION['person']=true;
$_SESSION['user']=$userID;
echo $_SESSION["person"];
header('Location:success.php');
}



}
else
{

	echo "giriş başarısız";
}





 ?>