<!DOCTYPE html>
<html>
<head>
	<title>Reporte Proveedor</title>
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
	<center><h2>Reporte Proveedor</h2></center>
	<table>
		
			<tr>
				<th>Tipo</th>
				<th>Nombre</th>
				<th>Dirección</th>
				<th>Telefono</th>
				<th>Email</th>
			</tr>
		
		
			@foreach($proveedores as $persona)
				@if($persona->tipo_persona == 'Proveedor')
				<tr>
					<td>{{$persona->tipo_persona}}</td>
					<td>{{$persona->nombre}}</td>
					<td>{{$persona->direccion}}</td>
					<td>{{$persona->telefono}}</td>
					<td>{{$persona->email}}</td>

				</tr>
				@endif
			@endforeach
		
	</table>
</body>
</html>