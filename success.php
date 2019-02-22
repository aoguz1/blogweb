<?php 
session_start();
if ($_SESSION['person']=="true") {

	echo "hoşgeldiniz";

}
else
{
	echo "tekrar deneyiniz";
}

?>