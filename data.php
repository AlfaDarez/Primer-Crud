<?php
include_once 'conn.php';

 $nombre=$_REQUEST['nombre'];
 $apellido=$_REQUEST['apellido'];
 $query= "INSERT INTO personas (nombre,apellido) VALUES ('".$nombre."','".$apellido."')";
 $consulta=mysql_query($query,$conn)or die("No se puede hacer la consulta");












 ?>
 <a href="index.php"><?php echo $nombre." Fue ingresado Satisfactoria mente";  ?></a>
