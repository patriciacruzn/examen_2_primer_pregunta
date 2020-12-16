<?php
$_SESSION["id"]=1001;
$sqlff ="select * from universidad.materia ";
$sqlff.="where id=".$_SESSION["id"];
$resultadoff = mysqli_query($conn, $sqlff);
$filaff = mysqli_fetch_row($resultadoff);
$id=$filaff[0];
$descripcion=$filaff[1];
$sigla=$filaff[2];
$turno=$filaff[3];
$habilitada=$filaff[4];
$cupo=$filaff[5];
?>