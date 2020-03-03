<?php

// 1.- RECIBIR EL ID 
// 2.- CONECTARNOS A LA BD
// 3.- BUSCAR LA FILA (ALUMNO) QUE CORRESPONDE AL ID QUE SE RECIBE 
// 4.- OBTENER ESE VALOR Y TRABAJARLO CON UN FORMULARIO DE EDICION 
// 5.- ENVIAR EL FORMULARIO DE EDICION CON EL ID A UN ARCHIVO PHP PARA SU ACTUALIZACION 


// RECIBIMOS EL ID CON METODO GET

$id= $_GET["id"];
echo "este el id".$id; 
  // Dirección o IP del servidor MySQL
      $host = "localhost";
 
      // Puerto del servidor MySQL
      $puerto = "3306";
 
      // Nombre de usuario del servidor MySQL
      $usuario = "root";
 
      // Contraseña del usuario
      $contrasena = "";
 
      // Nombre de la base de datos
      $baseDeDatos ="tallerbd";
 
      // Nombre de la tabla a trabajar
      $tabla = "alumnos";
 
    function Conectarse()
   {
     global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
     if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
     { 
        echo "Error conectando a la base de datos.<br>"; 
       exit(); 
            }
     else
      {
       echo "Listo, estamos conectados.<br>";
      }
     if (!mysqli_select_db($link, $baseDeDatos)) 
      { 
        echo "Error seleccionando la base de datos.<br>"; 
        exit(); 
      }
     else
      {
       echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
     }
   return $link; 
    } 
 
    $link = Conectarse();
 
   $query = "SELECT * FROM $tabla where id=$id;";

    $result = mysqli_query($link, $query); 
$a=0; 
   while($row = mysqli_fetch_array($result))
   { 
      $a++;
    $id=$row["id"];
    $nombre=$row["nombre"];
    $apellidoPaterno=$row["apellidoPaterno"];
    $apellidoMaterno=$row["apellidoMaterno"];
     } 
 
    mysqli_free_result($result); 
 
   mysqli_close($link);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Actualizacion de Alumno </title>
 <style type="text/css">
 input[type="text"]{
      width: 100%;
      display:inline-block;
      padding: 8px 10px;
      border: 1px solid #000;
      border-radius: 6px; 
      box-sizing: border-box; 
 }

 input[type=submit]{
  width: 100%; 
  background-color: #575759;
  color: #fff; 
  padding: 14px 20px; 
border: none;
border-radius: 6px;
cursor: pointer;
 }

   #formulario{
    border-radius: 10px;
    background-color: #8c8c8f;

    padding: 20px;
   }
 </style>


</head>
<body>
  <div id="formulario">
<form name="formActualiza" method="post" action="actualizaAlumno.php">
	<label>
		Nombre
	</label>
	<input type="text" name="nombreAlumno" value="<?php echo $nombre;  ?>">
	<br>
	<label>Apellido Paterno</label>
	
	<input type="text" name="apellidoPaterno" value="<?php echo $apellidoPaterno; ?>">
	<br>
	<label>Apellido Materno</label>
	
	<input type="text" name="apellidoMaterno" value="<?php echo $apellidoMaterno; ?>">
	<br>
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<br>
	<input type="submit" value="Actualizar Alumno">

</form>
</div>
</body>
</html>



