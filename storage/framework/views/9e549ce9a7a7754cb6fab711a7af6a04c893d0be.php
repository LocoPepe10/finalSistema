<?php $__env->startSection('contenido'); ?>
<h1> Lista de Articulos </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="articulo/create" class="btn btn-success btn-block stretched-link"> Añadir Articulo </a>
    </div>
</div>
<?php echo $__env->make('almacen.articulo.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-hover">
            <thead>
                <th>Nombre</th>
                <th>Código</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Opciones</th>
            </thead>
            <?php foreach($articulos as $art): ?>
            <tr>
                <td><?php echo e($art->nombre); ?></td>
                <td><?php echo e($art->codigo); ?></td>
                <td><?php echo e($art->categoria); ?></td>
                <td><?php echo e($art->stock); ?></td>
                <td>
                    <img src="<?php echo e(asset('imagenes/articulos/'.$art->imagen)); ?>" alt="<?php echo e($art->nombre); ?>" height="100px" width="100px" class="img-thumbnail"/>
                </td>
                <td>
                    <?php echo e($art->estado); ?>

                </td>
                <td>
                    <a href="<?php echo e(URL::action('ArticuloController@edit',$art->idarticulo)); ?>"  class="btn btn-primary" role="button" aria-pressed="true">
                        Editar
                    </a>                    
                    <a href="" data-target="#modal-delete-<?php echo e($art->idarticulo); ?>" data-toggle="modal">
                        <button class="btn btn-danger">Eliminar</button>
                    </a>
                </td>
            </tr>
            <?php echo $__env->make('almacen.articulo.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; ?>
        </table>
        <?php echo e($articulos->render()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>