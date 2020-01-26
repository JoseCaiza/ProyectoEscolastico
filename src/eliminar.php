<?php
include("conexion.php"); 
$id=$_GET['id'];
echo $id;
$sql="delete from alumnos where id='".$id."'";
$result = $conexion->query($sql);

header('location:index.php')

?>