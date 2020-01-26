<?php
    include 'conexion.php';

    $id = $_REQUEST['id'];
    $cedula = $_REQUEST['cedula'];
    $nombre = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];
    $telefono = $_REQUEST['telefono'];

    $queryText = "UPDATE alumnos SET cedula = '" . $cedula ."', nombre = '" . $nombre ."',edad = '" . $edad ."',telefono = '" . $telefono ."' WHERE id = '" . $id ."' " ;
    echo $queryText;
    echo "<script>console.log(\'". $queryText ."\')</script>";
    if ($conexion->query($queryText) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $queryText . "<br>" . $conexion->error;
    }
    
    $conexion->close();
    header('location:index.php')

?>