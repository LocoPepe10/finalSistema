<?php $__env->startSection('contenido'); ?>
<h1> Listado de Ventas </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="venta/create" class="btn btn-success btn-block stretched-link"> Nueva Venta </a>
    </div>
</div>
<?php echo $__env->make('ventas.venta.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-hover">
            <thead>             
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Comprobante</th>         
                <th>Impuesto</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Opciones</th>
            </thead>
            <?php foreach($ventas as $ven): ?>
            <tr>
                <td><?php echo e($ven->fecha_hora); ?></td>
                <td><?php echo e($ven->nombre); ?></td>
                <td><?php echo e($ven->tipo_comprobante.": ".$ven->serie_comprobante."-".$ven->num_comprobante); ?></td>
               
                <td><?php echo e($ven->impuesto); ?></td>                
                <td><?php echo e($ven->total_venta); ?></td>
                <td><?php echo e($ven->estado); ?></td>
                
                <td>
                    <a href="<?php echo e(URL::action('VentaController@show',$ven->idventa)); ?>" class="btn btn-primary" role="button" aria-pressed="true">
                        Detalles
                    </a>                    
                    <a href="" data-target="#modal-delete-<?php echo e($ven->idventa); ?>" data-toggle="modal" class="btn btn-danger" role="button" aria-pressed="true">
                        Anular
                    </a>
                </td>
            </tr>
            <?php echo $__env->make('ventas.venta.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; ?>
        </table>
        <?php echo e($ventas->render()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>