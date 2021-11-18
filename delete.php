<?php

include("conexion.php");
$con=conectar();

$IDempleado=$_GET['id'];

$sql="DELETE FROM empleado  WHERE IDempleado='$IDempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>