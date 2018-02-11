<!doctype html>
<html lang="en">
  <head>
    <title></title>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <nav>
      <i class="fas fa-chess " style="font-size:70px; margin-left:50px;  box-sizing: border-box;"></i>
      <h2 style="box-sizing:border-box; ">Primer Crud <?php echo $nombre='Success'; ?></h2>
    </nav>

<div class="container">

<?php
include_once 'conn.php';
$id=$_REQUEST['id'];

$con="SELECT * from personas WHERE  id='$id'";
$resul=mysql_query($con,$conn) or die ("La consulta Fallo");

  while($row=mysql_fetch_array($resul)){
?>
<form method="post" action="actualizar.php?id=<?php echo $id?>" >
<input type="text" name="nombre" value="<?php echo $row['nombre'] ?>">
<input type="text" name="apellido" value="<?php echo $row['apellido'] ?>">
<button class="btn btn-danger" id="enviar" >Enviar</button>
</form>



<?php } ?>

</div>
