<?php 
    include 'conexion.php';

    $cedula = $_REQUEST['cedula'];
    $nombre = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];
    $telefono = $_REQUEST['telefono'];

    echo "<script>console.log('REQUEST VALUES')</script>";
    echo "<script>console.log('". $cedula ."')</script>";
    echo "<script>console.log('". $nombre ."')</script>";
    echo "<script>console.log('". $edad ."')</script>";
    echo "<script>console.log('". $telefono ."')</script>";

    $queryText = "INSERT INTO alumnos (cedula, nombre, edad, telefono) VALUES ('" . $cedula ."', '" . $nombre ."', '" . $edad ."', '" . $telefono ."')";
    echo "<script>console.log(\'". $queryText ."\')</script>";
    if ($conexion->query($queryText) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $queryText . "<br>" . $conexion->error;
    }

    $conexion->close();
    header('location:index.php')
?>