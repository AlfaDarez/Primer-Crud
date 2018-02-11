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


    <div class="row">
      <div class="col-md-6">
        <h3>Alumnos</h3>
        <form method="post" action="data.php" >
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" class="form-control" name="nombre"   id="nombre" placeholder="Nombre" required>
             </div>

             <div class="form-group">
               <label for="exampleInputEmail1">Apellidos</label>
               <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido Paterno" required>
              </div>
              <div class="form-group">
                <button class="btn btn-danger" id="enviar" >Enviar</button>

              </div>
            </form>
      </div>
      <div class="col-md-6" >
        <h3>Estado</h3>

        <table class="table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th> Opciones</th>
            </tr>
          </thead>
          <tbody>

              <?php include_once 'conn.php' ; ?>

            <?php    $consulta="SELECT * from personas";
              $resul=mysql_query($consulta,$conn) or die ("La consulta Fallo");

                  ?>

              <?php  while($row=mysql_fetch_array($resul)){ ?>
                <tr>
                <td><?php echo ($row['nombre']);  ?> </td>
                <td> <?php echo ($row['apellido']); ?></td>
                <td>  <a href="borrar.php?id=<?php echo ($row['id']) ?>"><i class="far fa-trash-alt"></i></a>
                 <a href="editar.php?id=<?php echo ($row['id']) ?>"><i class="far fa-edit"></i></a></td>

              </tr>
            <?php } ?>




            <tr>

            </tr>
          </tbody>

        </table>
        <div class="">
          <a href="print_pdf.php">  <button type="button" class=" btn-info" name="button">Reporte PDF</button></a>
        </div>

      </div>





  </div>


</div>



    <!-- Optional JavaScript -->
 <script src="data.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>

<style>
.dato{
  display:none;
}
</style>


<?php
require 'conn.php';
?>
