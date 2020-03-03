    <html> 
   <head>
      <title>Ejemplo de selección de datos en base de datos MySQL</title>
<style type="text/css">
    table{
          border-collapse: collapse;
          width: 100%; /*ancho*/
              }
        th{
          height: 40px;
          text-align: center; /*left, center, right*/
        }      
        td{ vertical-align: bottom; 
            text-align: center; }
         th,td   {
           border-bottom: 1px solid #4882e0;

         }
         tr:hover{ background-color: #4882e0; }

</style>

   </head> 
  
    <body>
 
     <?php
// UTILIZAR REQUIRE ONCE PARA LLAMAR A UNA LIBRERIA

     require_once 'conexionMysql.php';
 
   
 
    $link = Conectarse();
 
   $query = "SELECT * FROM $tabla;";
 

 
    $result = mysqli_query($link, $query); 
 echo '<h2> Listado de alumno</h2>';

 echo '<table>
        <tr>
            <th> Nombres </th>
            <th> Apellidos </th>
            <th> Borrar </th>
            <th> Actualizar </th>';

 
 $a=0; 
   while($row = mysqli_fetch_array($result))
   { 
    
    $a++;
    $id=$row["id"];
    $nombre=$row["nombre"];
    $apellidoPaterno=$row["apellidoPaterno"];
    $apellidoMaterno=$row["apellidoMaterno"];
//concatenar apellidos
    $apellidos= $apellidoPaterno.' '.$apellidoMaterno;

    echo "<tr>";
    echo "<td> $nombre </td>";
    echo "<td> $apellidos </td>";
    echo "<td><a href=\"borrar.php?id=$id\"> Borrar</a> </td>";
    echo "<td><a href=\"actualizar.php?id=$id\"> Actualizar</a> </td>";
   
     } 
  echo "</table>";

    mysqli_free_result($result); 
 
   mysqli_close($link);
 
 
    ?>
 
    </table> 
 
   </body> 
    </html>