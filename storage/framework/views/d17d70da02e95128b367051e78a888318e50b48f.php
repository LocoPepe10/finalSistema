<?php $__env->startSection('content'); ?>
        <?php foreach($usuarios as $usu): ?>
        <tr>
            <td><?php echo e($usu->name); ?></td>
            <td><?php echo e($usu->email); ?></td>
        </tr>
        <?php endforeach; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>