<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Menú</title>
</head>
<body>        
<h1>Menú</h1>
<?php
session_start();
if (isset($_SESSION['admin'])) {
echo "&nbsp;&nbsp;Has fet login amb l'usuari:<br></br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['admin'];  
}
?>
<p>Aquí tens un llistat de les següents opcions a triar<p>
<ul>
	<li><a href="comprovar_divisor.php">Comprovar divisors</a></li>
    <li><a href="Conjetura_collatz.php">Conjentura collatz</a></li>
    <li><a href="sortir.php">Sortir</a></li>
</ul>           
</body>
</html>