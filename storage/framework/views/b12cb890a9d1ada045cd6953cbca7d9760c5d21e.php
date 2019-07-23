<?php $__env->startSection('contenido'); ?>
<h1> Lista de ingresos </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="ingreso/create" class="btn btn-success btn-block stretched-link"> Añadir Ingreso </a>
    </div>
</div>
<?php echo $__env->make('compras.ingreso.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-hover">
            <thead>             
                <th>Fecha</th>
                <th>Proveedor</th>
                <th>Comprobante</th>         
                <th>Impuesto</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Opciones</th>
            </thead>
            <?php foreach($ingresos as $ing): ?>
            <tr>
                <td><?php echo e($ing->fecha_hora); ?></td>
                <td><?php echo e($ing->nombre); ?></td>
                <td><?php echo e($ing->tipo_comprobante.": ".$ing->serie_comprobante."-".$ing->num_comprobante); ?></td>
               
                <td><?php echo e($ing->impuesto); ?></td>                
                <td><?php echo e($ing->total); ?></td>
                <td><?php echo e($ing->estado); ?></td>
                
                <td>
                    <a href="<?php echo e(URL::action('IngresoController@show',$ing->idingreso)); ?>"  class="btn btn-primary" role="button" aria-pressed="true">
                        Detalles
                    </a>                    
                    <a href="" data-target="#modal-delete-<?php echo e($ing->idingreso); ?>" data-toggle="modal">
                        <button class="btn btn-danger">Anular</button>
                    </a>
                </td>
            </tr>
            <?php echo $__env->make('compras.ingreso.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; ?>
        </table>
        <?php echo e($ingresos->render()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>