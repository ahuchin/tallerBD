<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" action="calcular.php">
	
	<label>
		Numero de copias 
		<input type="text" name="numero">
	</label>
	<label>
		<select name="precio">
			<option value="1">Impresiones</option>
			<option value=".50">Copias</option>
		</select>
	</label>
	<input type="submit" name="enviar">
</form>

</body>
</html>