<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Estudiantes</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Estudiantes</h2>
          <?php 
            include 'conexion.php';
            $sql = "SELECT * FROM ALUMNOS";
            $result = $conexion->query($sql);
          ?>

        </div>
      </div>
      <hr />
      <a href="nuevo.php" type="button" class="btn btn-primary">Crear nuevo</a>
    
    <legend>Registros</legend>
    <table class="table table-striped">
      <thead>
        <tr>
            <td>Id</td>
            <td>Cédula</td>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Telefono</td>
            <td><center>Acciones</center></td>
        </tr>
      </thead>
      <tbody>
      <?php
        include("conexion.php"); 
      
        $sql = "SELECT * FROM alumnos";
        $result = $conexion->query($sql);
        // output data of each row
        while($row = $result->fetch_assoc() ){

        ?>
        <tr>
          <td><?php echo $row["id"] ?></td>
          <td><?php echo $row["cedula"] ?></td>
          <td><?php echo $row["nombre"] ?></td>
          <td><?php echo $row["edad"] ?></td>
          <td><?php echo $row["telefono"] ?></td>
          <td>
            <center>
              <a type="button" class="btn btn-info" href="editar.php?id=<?php echo $row["id"] ?>">Editar</a>
              <a type="button" class="btn btn-danger" href="eliminar.php?id=<?php echo $row["id"] ?>">Eliminar</a>
            </center>
          </td>
        </tr>
        <?php } ?>
        
      </tbody>
    </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>