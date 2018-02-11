<?php
include_once 'conn.php';
$nombre=$_REQUEST['id'];


$sql="DELETE FROM personas  WHERE id='$nombre'";
$res=mysql_query($sql,$conn)or die("No se puede hacer la consulta");
?>

<a href="index.php"> <?php  echo "Usuario Fue eliminado "; ?></a>
