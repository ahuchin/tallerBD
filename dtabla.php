<!DOCTYPE html>
<html>
<head>
	<title>Diseño de una tabla</title>
<style type="text/css">




table{
 border-collapse: collapse;
 width: 100%;
}	

table, td, th {
	/*border:1px solid black ;*/
}
th{
	height: 40px;
	text-align: center; /*left, center , right*/
}
td{
	vertical-align: bottom;
}
 th, td{
 	border-bottom: 1px solid #035efc;
 }
tr:hover {background-color:#f5f5f5;}
tr:nth-child(even){background-color: #f2f2f2;}
th{
	background-color: #2056c9;
	color: #fff; 
}

</style>

</head>
<body>





<h2> Listado de Alumnos</h2>

<table>
	<tr>
		<th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>

	</tr>
	<tr>
		<td>Alejandro</td>
		<td>Huchin</td>
		<td>Aba</td>

	</tr>
	<tr>
		<td>Manuel</td>
		<td>Crescencio</td>
		<td>Rejon</td>

	</tr>

</table>

</body>
</html>