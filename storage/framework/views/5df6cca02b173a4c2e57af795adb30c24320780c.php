<?php $__env->startSection('contenido'); ?>
<h1> Categoria </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="categoria/create" class="btn btn-success btn-block stretched-link"> Añadir Categoria </a>
    </div>
</div>
<?php echo $__env->make('almacen.categoria.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Opciones</th>
				</thead>
               <?php foreach($categorias as $cat): ?>
				<tr>
					<td><?php echo e($cat->nombre); ?></td>
					<td><?php echo e($cat->descripcion); ?></td>
					<td>
						<a href="<?php echo e(URL::action('CategoriaController@edit',$cat->idcategoria)); ?>"  class="btn btn-primary" role="button" aria-pressed="true">Editar</a>
                         <a href="" data-target="#modal-delete-<?php echo e($cat->idcategoria); ?>" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				<?php echo $__env->make('almacen.categoria.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php endforeach; ?>
			</table>
		</div>
		<?php echo e($categorias->render()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>