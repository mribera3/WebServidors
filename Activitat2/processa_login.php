<?php
setcookie('usuari',$nom,time()+3600);
$usuari = $_REQUEST['usuari'];
$password = $_REQUEST['password'];
if ($_POST["usuari"]=="admin" && $_POST["password"]=="admin"){
session_start();
$_SESSION['usuari'] = "admin";
header("Location: menu.php");	
} else {
	header("Location: error.php");
}
?>