<?php
    $servername = "database";
    $username = "root";
    $password = "1234.";
    $dataBase = "cp_escolastico";

// Create connection
$conexion = new mysqli($servername, $username, $password, $dataBase);


// Check connection
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}
echo "<script>console.log('Connected successfully')</script>";
?>  