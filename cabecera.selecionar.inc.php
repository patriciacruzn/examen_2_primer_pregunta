<?php
$_SESSION["id"]=1001;
$sqlf ="select * from universidad.materia ";
$sqlf.="where id=".$_SESSION["id"];
$resultadof = mysqli_query($conn, $sqlf);
$filaf = mysqli_fetch_row($resultadof);
$id=$filaf[0];
$descripcion=$filaf[1];
$sigla=$filaf[2];
$turno=$filaf[3];
$habilitada=$filaf[4];
?>