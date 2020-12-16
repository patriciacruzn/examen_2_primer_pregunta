<?php
$_SESSION["id"]=11;
$sqlf ="select * from universidad.estudiante ";
$sqlf.="where id=".$_SESSION["id"];
$resultadof = mysqli_query($conn, $sqlf);
$filaf = mysqli_fetch_row($resultadof);
$id=$filaf[0];
$nombre=$filaf[1];
$apellido=$filaf[2];
$ci=$filaf[3];
$fechaNacimiento=$filaf[4];
$direccion=$filaf[5];
$telefono=$filaf[6];
?>