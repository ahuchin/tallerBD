<!DOCTYPE html>
<html>
<head>
	<title>Conexion a BD</title>
</head>
<body>
<?php
require_once 'mysqlconexion.php';


$link=Conectarse(); 
$query="SELECT nombre, apellidoPaterno, apellidoMaterno from alumnos";
$result=mysqli_query($link, $query); 
//echo $result, <-- no funciona se tiene que recorrer el objeto de  array
	echo "</br>";
echo'
<table>
<tr>
<td> Nombre </td>
<td>Apellido Paterno</td>
<td>Apellido Materno</td>
<tr>';


 while ($row =mysqli_fetch_array($result)) {
 	// imprimir un campo ->>echo $row["nombre_del_campo"]
 	echo '<tr>';
 	echo '<td>'.$row["nombre"].'</td>';
 	echo '<td>'.$row["apellidoPaterno"].' </td>';
 	echo '<td>'.$row["apellidoMaterno"].' </td>';
  	echo "</tr>";
 }
echo '</table>';

mysqli_close($link); 

?>
</body>
</html>