<?php
include_once 'conn.php';
$id=$_REQUEST['id'];

 $nombre=$_REQUEST['nombre'];
 $apellido=$_REQUEST['apellido'];

 //$q= "Update personas Set nombre='$nombre',  apellido='$apellido' Where id='$id')";
 //$consulta=mysql_query($q,$conn)or die("No se puede hacer la consulta");
$refrech= "UPDATE personas SET nombre='$nombre', apellido='$apellido' WHERE id='$id'";
$fin=mysql_query($refrech,$conn) or die("Te la pelas De nuevo");












 ?>
 <a href="index.php"><?php echo $nombre." Tus Datos Fueron Actualizados"; ?></a>
