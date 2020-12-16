<?php
$_SESSION["id"]=1001;
$sqlf ="select * from universidad.materia ";
$sqlf.="where id=".$_SESSION["id"];
$resultadof = mysqli_query($conn, $sqlf);
$filaf= mysqli_fetch_row($resultadof);
$cupos=$filaf[5];
?>
hay cupos?:
<input type="text" value="" name="cond"/><br>
<p>si los cupos sobrepasan de 150</p>
<p>se notifica el cierre de la materia </p>
<br>
<label>CUPOS?</label>
<input type="text" name="habilitada" value="<?php echo $cupos; ?>"/>