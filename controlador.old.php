<?php
$codflujo=$_GET["codflujo"];
$codproceso=$_GET["codproceso"];
$codprocesoSiguiente=$_GET["codprocesosiguiente"];
$archivo=$_GET["archivo"];
include "controlador".$archivo;
echo $caso;
if ($caso=='C')
{
echo '1';
if (isset($_GET["Anterior"])) {
	$sql="select * from proceso ";
	$sql.="where codFlujo='$codFlujo' ";
	$sql.="and codProcesoSiguiente='$codProceso'";
}
if (isset($_GET["Siguiente"])) {
	$sql="select * from proceso ";
	$sql.="where codFlujo='$codFlujo' ";
	$sql.="and codProceso='$codProcesoSiguiente'";
}

}
echo '2';
include "conexion.inc.php";
$result=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($result);
$codprocesoEnvia=$fila['codProceso'];
$archivoEnvia="flujo.php?codflujo=".$codflujo."&codproceso=".$codprocesoEnvia;
//echo $archivoEnvia;
//header("Location: ".$archivoEnvia);
?>