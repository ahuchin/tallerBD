<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php
require_once 'conexionMysql.php';
$link=Conectarse(); 
$query="SELECT id,nombre from municipios order by nombre asc";
$result=mysqli_query($link,$query);



?>


<form name="lista" action="guardaLista.php" method="POST">
	<label>
		Seleccione una opción
	</label>
	<select name="marcasCarros">
		<?php
	while ($row=mysqli_fetch_array($result)) {
		$id=$row["id"];
		$nombre=$row["nombre"];
    echo '<option value='.$id.'>'.$nombre.'</option>';
    
		}
		?>
		<option value="Nissan">Nissan</option>		
		<option value="Volvo">Volvo</option>		
		<option value="KIA">KIA</option>		
		<option value="Hiundai">Hiundai</option>
		<option value="Toyota">Toyota</option>		

	</select>

<input type="submit" value="enviar">


</form>

</body>
</html>