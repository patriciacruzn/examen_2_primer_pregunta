<?php
$cond=$_GET["cond"];
$sqlf="select * from proceso1 ";
$sqlf.="where codFlujo='$codflujo' ";
$sqlf.="and codProceso='$codproceso'";
echo $sqlf;
$result=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($result);
if ($cond=='si'){
	$codproceso=$fila[2];
	$codflujo=$fila[0];
}
	
else{
	$codproceso=$fila[3];
	$codflujo=$fila[0];
}
	$_SESSION["codProceso"]=$codproceso;
	
	$_SESSION["codFlujo"]=$codflujo;

?>