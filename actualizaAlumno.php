<?php
$id= $_POST["id"]; 
$nombreAlumno=$_POST["nombreAlumno"];
$apellidoPaterno=$_POST["apellidoPaterno"];
$apellidoMaterno=$_POST["apellidoMaterno"];

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
 
   $query = "UPDATE  alumnos SET  nombre='$nombreAlumno', apellidoPaterno='$apellidoPaterno', apellidoMaterno='$apellidoMaterno'   where id=$id;";


    $result = mysqli_query($link, $query); 
if ($result !=null) {
	# se realizo la consulta
	# que se va hcer ahora?
	# \ slash invertido para hacer Escape de las comillas

	
	print("<script> alert(\"Actualización Exitosa\");
		window.location='consulta.php';</script>");

}else{
	print("<script> alert(\"No se actualizo\");
		window.location='consulta.php';</script>");
}
 
?>