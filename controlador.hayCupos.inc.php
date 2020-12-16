
<?php
$_SESSION["id"]=1001;
$sqlfff ="select * from universidad.materia ";
$sqlfff.="where id=".$_SESSION["id"];
$resultadofff = mysqli_query($conn, $sqlfff);
$filafff = mysqli_fetch_row($resultadofff);
$id=$filafff[0];
$descripcion=$filafff[1];
$sigla=$filafff[2];
$turno=$filafff[3];
$habilitada=$filafff[4];
$cupos=$filafff[5];
?>
<?php
$id=$_GET["id"];
$descripcion=$_GET["descripcion"];
$sigla=$_GET["sigla"];

$sqlfff ="update universidad.materia SET ";
$sqlfff.="descripcion='$descripcion', ";
$sqlfff.="sigla='$sigla' ";
$sqlfff.="where id=".$_SESSION["id"];
$resultadofff = mysqli_query($conn, $sqlfff);
?>
