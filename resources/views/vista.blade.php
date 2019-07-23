<!DOCTYPE html>
<html>
<head>
	<title>Reporte Articulos</title>
<style>

table {
	font-family: arialm sans-serif;
	border-collapse: collapse;
	width: 100%;

}

td, th {
	border: 1px solid #dddddd;
	text-align: left;
	padding: 8px;

}

tr:nth-child(even) {
	background-color: #dddddd;

}


</style>

</head>
<body>
	<input name="fecha" type="text" id="fecha" value="<?php echo date("d/m/Y"); ?>" size="10" />
	<center><h2>Reporte Artículos</h2></center>
	<table>
		
			<tr>
				<th>Nombre</th>
				<th>Código</th>
				<th>Stock</th>
			</tr>
		
		
			@foreach($articulos as $articulo)
				<tr>
					<td>{{$articulo->nombre}}</td>
					<td>{{$articulo->codigo}}</td>
					<td>{{$articulo->stock}}</td>

				</tr>
			@endforeach
		
	</table>
</body>
</html>