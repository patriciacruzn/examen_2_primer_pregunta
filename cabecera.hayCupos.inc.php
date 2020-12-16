
<?php
$_SESSION["id"]=1001;
$sqlfff ="select * from universidad.materia ";
$sqlfff.="where id=".$_SESSION["id"];
$resultadofff = mysqli_query($conn, $sqlfff);
$filafff = mysqli_fetch_row($resultadofff);
$cupos=$filafff[5];
?>