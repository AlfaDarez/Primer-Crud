<html>

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
<div class="container">

  <img src="img.png">
  <h1>Reporte Semestral</h1>
  <h2>Equipo de desarrollo</h2>
  <br>
  <br>

  <table class="table" align="center" style="border: solid 1px #000000;">
    <thead >
      <tr >
        <th class="id">ID</th>
        <th >Nombre</th>
        <th >Apellidos</th>

      </tr>
    </thead>
    <tbody>

        <?php include_once 'conn.php' ; ?>

      <?php    $consulta="SELECT * from personas";
        $resul=mysql_query($consulta,$conn) or die ("La consulta Fallo");

            ?>

        <?php  while($row=mysql_fetch_array($resul)){ ?>
          <tr>
            <td class="id"><?php echo $row['id'] ?></td>
          <td align="center" ><?php echo ($row['nombre']);  ?> </td>
          <td align="center" > <?php echo ($row['apellido']); ?></td>


        </tr>
      <?php } ?>




      <tr>

      </tr>
    </tbody>

  </table>


	  <?php
	    $hoy = date("F j, Y");
		echo $hoy;
	  ?>










  <!--<img src="footer.png" class="footer">-->

</div>

</body>
<style>

table tr:nth-child(even) {
    background-color: #eee;
}
table tr:nth-child(odd) {
   background-color:#fff;
}
table th {
    background-color: black;
    color: white;
    width: 250px;
    text-align: center;
    font-size: 14px;
    padding: 5px;

}

table tr{
  text-align: justify;
  font-size: 19px;
  padding: 5px;
}
table .id{
  width: 50px;
  text-align: center;
}

</style>

<style>


.parrafo {
  text-align: justify;
  font-size: 19px;
  width: 580px;
  height: auto;
  margin: 50px;

  padding: 5px;
  margin-left: 90px;

}








    h1,h2{
      text-align: center;
    }
.container{


  height: 99%;
}

    img{
      width: 100%;
      height: 65px;
      margin: 10px;
      padding: 5px;
      margin-left: 5px;
      position:fixed;


    }

    .footer{
      margin: auto,auto, 10px,auto;


    }

    .container{

        background-image: url(fondo.png);
        background-repeat: no-repeat;
        background-position: center;

    }


</style>

<html>
