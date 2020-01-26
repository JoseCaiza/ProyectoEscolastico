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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agregar alumnos</title>
</head>
<body>
<?php
  include("conexion.php"); 
  $id=$_GET['id'];
  $sql="select * from alumnos where id='".$id."'";
  $result = $conexion->query($sql);
  while($row = $result->fetch_assoc() ){
?>
<div class="container">
  <h2>Actualizar alumnos</h2>
  <hr>
  <form action="alumnosUpdate.php" method="POST">
    <!-- Text input-->
    <div class="form-group">
      <label>ID</label>
      <input name="id" type="text" class="form-control" value="<?php echo $row["id"] ?>">
    </div>
    <!-- Text input-->
    <div class="form-group">
      <label>CÉDULA</label>
      <input name="cedula" type="text" class="form-control" value="<?php echo $row["cedula"] ?>">
    </div>
    <!-- Text input-->
    <div class="form-group">
      <label>Nombre</label>
      <input name="nombre" type="text" class="form-control" value="<?php echo $row["nombre"] ?>">
    </div>
    <!-- Text input-->
    <div class="form-group">
      <label>Edad</label>
      <input name="edad" type="number" class="form-control" value="<?php echo $row["edad"] ?>">
    </div>
    <!-- Text input-->
    <div class="form-group">
      <label>Telefono</label>
      <input name="telefono" type="text" class="form-control" value="<?php echo $row["telefono"] ?>">
    </div>
    <input type="submit" name="submit" class="btn btn-success" href="editar.php?id=<?php echo $row["id"] ?>??id=<?php echo $row["nombre"] ?>" value="Actualizar">
    <a href="index.php" type="button" class="btn btn-danger">Cancelar</a>
  </form>
  <?php
    }
  ?>
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