<html>
<body>
<?php
//empezamos la sesion
session_start();
//creamos la variable sesion para usuario q va ser igula a la bd de usuario_rol
$_SESSION["usuario"]="josue";
include "conexion.inc.php";
//mostrar datos
$sql="select *from seguimiento ";
$sql.="where usuario='".$_SESSION["usuario"]."' ";
$sql.="and fechafin is null";
$resultado=mysqli_query($conn,$sql);

?>
<table border="1px">
    <tr>
        <td>numero de tramite</td>
        <td>flujo</td>
        <td>proceso</td>
        <td>fecah inicial</td>
        <td >Operaciones</td>
    </tr>
<?php
//se muestre en filas todos los datos, sin el while solo muestra una
while($fila=mysqli_fetch_row($resultado)){
    //print_r($fila);
    //solo muestra el id y nombre
    echo "<tr>";
    echo "<td>".$fila[0]."</td>";
    echo "<td>".$fila[1]."</td>";
    echo "<td>".$fila[2]."</td>";
    echo "<td>".$fila[4]."</td>";
    echo"<td><a href='flujo.php?cf=".$fila[1]."&cp=".$fila[2]."'>Ver</a></td>";

    echo "<tr>";
}

?>
</table> 
</body>
</html>