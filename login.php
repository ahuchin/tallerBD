<!DOCTYPE html>
<html>
<head>

	<title></title>



<?php


if ($_GET['ban'] !=null) {
	//existe la bandera 
	echo "existe la bandera";
	$fraseError="El usuario o la clave no existe favor de verificar";
	$fraseRecuperacion='Desea recuperar sus datos <a href=\'recuperacion.php\'>RECUPERAR DATOS</a>';
	$fraseRegistro='Eres usuario nuevo? <a href=\'registroUsuario.php\'>Registrate!!</a>'; 
}
	
	?>
</head>
<body>



<form name="formularioLogin" action="verificar.php" method="post" >

	<label>
		Indica Nombre de Usuario: 
		<input type="text" name="username">
	</label>
	<label>
		Indica Clave: 
		<input type="password" name="clave">
	</label>
	
	<input type="submit" value="Registrar">
</form>
<br>
<?php 
echo $fraseError; 
echo '<br>';
echo $fraseRecuperacion;
echo '<br>';
echo $fraseRegistro;


?>
</body>
</html>