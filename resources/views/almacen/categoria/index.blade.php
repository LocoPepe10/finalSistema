@extends ('layouts.admin')
@section ('contenido')
<h1> Categoria </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="categoria/create" class="btn btn-success btn-block stretched-link"> Añadir Categoria </a>
    </div>
</div>
@include('almacen.categoria.search')
<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Opciones</th>
				</thead>
               @foreach ($categorias as $cat)
				<tr>
					<td>{{ $cat->nombre}}</td>
					<td>{{ $cat->descripcion}}</td>
					<td>
						<a href="{{URL::action('CategoriaController@edit',$cat->idcategoria)}}"  class="btn btn-primary" role="button" aria-pressed="true">Editar</a>
                         <a href="" data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('almacen.categoria.modal')
				@endforeach
			</table>
		</div>
		{{$categorias->render()}}
	</div>
</div>

@endsection