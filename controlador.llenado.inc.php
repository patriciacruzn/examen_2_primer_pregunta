<?php
$id=$_GET["id"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];

$sqlf ="update universidad.estudiante SET ";
$sqlf.="nombre='$nombre', ";
$sqlf.="apellido='$apellido' ";
$sqlf.="where id=".$_SESSION["id"];
$resultadof = mysqli_query($conn, $sqlf);
?>