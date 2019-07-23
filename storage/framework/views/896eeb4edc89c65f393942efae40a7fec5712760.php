<!DOCTYPE html>
<html>
<head>
	<title>Reporte Clientes</title>
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
	<center><h2>Reporte Clientes</h2></center>
	<table>
		
			<tr>
				<th>Tipo</th>
				<th>Nombre</th>
				<th>Dirección</th>
				<th>Teléfono</th>
				<th>Email</th>
			</tr>
		
		
			<?php foreach($clientes as $persona): ?>
				<?php if($persona->tipo_persona == 'Cliente'): ?>
				<tr>
					<td><?php echo e($persona->tipo_persona); ?></td>
					<td><?php echo e($persona->nombre); ?></td>
					<td><?php echo e($persona->direccion); ?></td>
					<td><?php echo e($persona->telefono); ?></td>
					<td><?php echo e($persona->email); ?></td>

				</tr>
				<?php endif; ?>
			<?php endforeach; ?>
		
	</table>
</body>
</html>