<?php
session_start();
include "conexion.inc.php";
$codflujo=$_GET["codflujo"];
$codproceso=$_GET["codproceso"];
$pantalla=$_GET["pantalla"];
$tipo=$_GET["tipo"];
$codprocesosiguiente=$_GET["codprocesosiguiente"];
$pantalla="controlador.".$pantalla;
include $pantalla;
if($tipo=='C'){
    echo $codProceso;
	$sql="select * from proceso ";
	$sql.="where codFlujo='$codflujo' ";
	$sql.="and codProceso='$codproceso'";
	$result=mysqli_query($conn, $sql);
    $fila=mysqli_fetch_row($result);
    $cf=$fila[0];
    $cp=$fila[2];
	
	header("Location: flujo.php?cf=$cf&cp=$cp");
    
}else{
    if (isset($_GET["Siguiente"]))
    {
    $sql ="select * from proceso ";
    $sql.="where codFlujo='$codflujo' ";
    $sql.="and codProceso='$codproceso'";
    $resultado = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_row($resultado);
    $cf=$fila[0];
    $cp=$fila[2];
    }
    if (isset($_GET["Anterior"]))
    {
    $sql ="select * from proceso ";
    $sql.="where codFlujo='$codflujo' ";
    $sql.="and codProcesoSiguiente='$codproceso'";	
    $resultado = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_row($resultado);
    $cf=$fila[0];
    $cp=$fila[1];
    }
    
    header("Location: flujo.php?cf=$cf&cp=$cp");
}
?>