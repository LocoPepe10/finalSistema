<?php $__env->startSection('contenido'); ?>
<h1> Listado de Usuarios </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="usuario/create" class="btn btn-success btn-block stretched-link"> Añadir Usuario </a>
    </div>
</div>
<?php echo $__env->make('seguridad.usuario.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<table class="table table-striped table-bordered table-condensed table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usu): ?>
        <tr>
            <td><?php echo e($usu->id); ?></td>
            <td><?php echo e($usu->name); ?></td>
            <td><?php echo e($usu->email); ?></td>
            <td>
                <a href="<?php echo e(URL::action('UsuarioController@edit',$usu->id)); ?>"  class="btn btn-primary" role="button" aria-pressed="true">
                    Editar
                </a>                    
                <a href="" data-target="#modal-delete-<?php echo e($usu->id); ?>" data-toggle="modal">
                    <button class="btn btn-danger">Eliminar</button>
                </a>
            </td>
        </tr>
        <?php echo $__env->make('seguridad.usuario.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endforeach; ?>
    </tbody> 
</table>
<?php echo $usuarios->render(); ?>           


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>