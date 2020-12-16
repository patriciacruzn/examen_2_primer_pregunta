<?php
include "conexion.inc.php";
$ci=$_GET["cond"];
$codFlujo=$_GET["codflujo"];
$codProceso=$_GET["codproceso"];
	$sql="select * from proceso ";
	$sql.="where codFlujo='$codFlujo' ";
	$sql.="and codProceso='$codProceso'";
echo $sql;
$result=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($result);
$tipo=$fila['tipo'];
echo $tipo;
if ($tipo=='C')
{
	$_SESSION['cuestionante']='C';	
	$caso='C';
}
else
{
	$caso='N';
	$_SESSION['cuestionante']='N';
}
?>