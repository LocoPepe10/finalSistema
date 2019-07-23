<?php echo Form::open(array('url'=>'almacen/articulo','method'=>'GET','autocomplete'=>'off','role'=>'search')); ?>

<div class="row justify-content-left">
	<div class="col-md-2">
		<div class="form-group">
	        <button type="submit" class="btn btn-block btn-dark my-2"> Buscar </button>
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
	        <input type="text" class="form-control my-2" name="searchText" placeholder='Buscar...' value="<?php echo e($searchText); ?>"/>
		</div>
	</div>
	<div class="col-md-2 offset-md-5">
		<div class="form-group">
			<a href="#" class="btn btn-primary btn-block stretched-link my-2"> Reportes </a>
		</div>
	</div>
</div>
<?php echo e(Form::close()); ?>


