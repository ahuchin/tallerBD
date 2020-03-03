<?php
//obtener un valor por metodo GET


$id=$_GET["id"];

echo "Este es la variable por metodo GET".$id;


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
  $query = "DELETE  FROM $tabla where id=$id;";
  echo $query;

    $result = mysqli_query($link, $query); 

  echo 'El alumno se ha borrado';
  echo '<a href="consulta.php">Regresar</a>';


?>

