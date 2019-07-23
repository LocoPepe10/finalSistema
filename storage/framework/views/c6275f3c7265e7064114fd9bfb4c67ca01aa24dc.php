<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-md-6">
			<h3>Nuevo Cliente</h3>
			<?php if(count($errors)>0): ?>
			<div class="alert alert-danger">
				<ul>
				<?php foreach($errors->all() as $error): ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; ?>
				</ul>
			</div>
			<?php endif; ?>
		</div>
	</div>

	<?php echo Form::open(array('url'=>'ventas/cliente','method'=>'POST','autocomplete'=>'off')); ?>

    <?php echo e(Form::token()); ?>


    <div class="row">
    	<div class="col-md-6">
    		<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" required value="<?php echo e(old('nombre')); ?>" class="form-control" placeholder="Nombre...">
            </div>
    	</div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="nombre">Direccion</label>
                <input type="text" name="direccion" value="<?php echo e(old('direccion')); ?>" class="form-control" placeholder="Direccion...">
            </div>
        </div>


    	<div class="col-md-6">
    		<div class="form-group">
    				<label>Documento</label>
    			<select name="tipo_documento" class="form-control">
                    <option value="RUT">Rut</option>
                    <option value="PAS">Pasaporte</option>
    			</select>
    		</div>
    	</div>

    	<div class="col-md-6">
    		
    		<div class="form-group">
            	<label for="num_documento">Numero de documento</label>
            	<input type="text" name="num_documento"  value="<?php echo e(old('num_documento')); ?>" class="form-control" placeholder="Numero de documento...">
            </div>

    	</div>

    	<div class="col-md-6">
    		<div class="form-group">
            	<label for="telefono">Telefono</label>
            	<input type="text" name="telefono" value="<?php echo e(old('telefono')); ?>" class="form-control" placeholder="Telefono...">
            </div>
    	</div>

    	<div class="col-md-6">
    		<div class="form-group">
            	<label for="email">Email</label>
            	<input type="email" name="email"  value="<?php echo e(old('email')); ?>" class="form-control" placeholder="Email...">
            </div>
    	</div>

    	
    	<div class="col-lg-6">
    		<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
    	</div>

    </div>
 
            
  <?php echo Form::close(); ?>		
<?php $__env->stopSection(); ?>    

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>