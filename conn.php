<?php
$servername = "localhost";
$username = "root";
$password = "ADMIN";
$dbname = "ejemplo01";

$conn=mysql_connect($servername,$username,$password) or die ("No se pude Hacer ejecutar la coneccion");

$bd= mysql_select_db($dbname,$conn) or die("No se encuentra la base de datos");



?>
