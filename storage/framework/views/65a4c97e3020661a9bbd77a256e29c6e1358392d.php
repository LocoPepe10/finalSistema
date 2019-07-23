<?php $__env->startSection('contenido'); ?>
<h1> Listado de proveedores </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="proveedor/create" class="btn btn-success btn-block stretched-link"> Añadir Proveedor </a>
    </div>
</div>
<?php echo $__env->make('compras.proveedor.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-hover">
            <thead>
                <th>Nombre</th>
                <th>Tipo DOC</th>
                <th>Número DOC</th>
                <th>Teléfono</th>
                            
                <th>Opciones</th>
            </thead>
            <?php foreach($personas as $per): ?>
            <tr>
                <td><?php echo e($per->nombre); ?></td>
                <td><?php echo e($per->tipo_documento); ?></td>
                <td><?php echo e($per->num_documento); ?></td>
                <td><?php echo e($per->telefono); ?></td>
                
                
                <td>
                    <a href="<?php echo e(URL::action('ProveedorController@edit',$per->idpersona)); ?>"  class="btn btn-primary" role="button" aria-pressed="true">
                        Editar
                    </a>                    
                    <a href="" data-target="#modal-delete-<?php echo e($per->idpersona); ?>" data-toggle="modal">
                        <button class="btn btn-danger">Eliminar</button>
                    </a>
                </td>
            </tr>
            <?php echo $__env->make('compras.proveedor.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; ?>
        </table>
        <?php echo e($personas->render()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>