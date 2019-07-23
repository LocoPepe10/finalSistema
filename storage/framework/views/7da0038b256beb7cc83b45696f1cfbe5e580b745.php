<?php $__env->startSection('contenido'); ?>
<h1> Listado Clientes </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="cliente/create" class="btn btn-success btn-block stretched-link"> Añadir Cliente </a>
    </div>
</div>
<?php echo $__env->make('ventas.cliente.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Tipo Documento</th>
					<th>Numero de documento</th>
					<th>Telefono</th>
					<th>Email</th>
					<th>Opciones</th>
				</thead>
               <?php foreach($personas as $per): ?>
				<tr>
					<td><?php echo e($per->idpersona); ?></td>
					<td><?php echo e($per->nombre); ?></td>
					<td><?php echo e($per->tipo_documento); ?></td>
					<td><?php echo e($per->num_documento); ?></td>
					<td><?php echo e($per->telefono); ?></td>
					<td><?php echo e($per->email); ?></td>

					<td>
						<a href="<?php echo e(URL::action('ClienteController@edit',$per->idpersona)); ?>" class="btn btn-primary" role="button" aria-pressed="true">Editar</a>
                         <a href="" data-target="#modal-delete-<?php echo e($per->idpersona); ?>" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				<?php echo $__env->make('ventas.cliente.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php endforeach; ?>
			</table>
		</div>
		<?php echo e($personas->render()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>