<?php
$id=$_GET["id"];
$descripcion=$_GET["descripcion"];
$sigla=$_GET["sigla"];

$sqlf ="update universidad.materia SET ";
$sqlf.="descripcion='$descripcion', ";
$sqlf.="sigla='$sigla' ";
$sqlf.="where id=".$_SESSION["id"];
$resultadof = mysqli_query($conn, $sqlf);
?>