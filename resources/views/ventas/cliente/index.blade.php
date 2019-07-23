@extends ('layouts.admin')
@section ('contenido')
<h1> Listado Clientes </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="cliente/create" class="btn btn-success btn-block stretched-link"> Añadir Cliente </a>
    </div>
</div>
@include('ventas.cliente.search')
<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre</th>
					<th>Tipo Documento</th>
					<th>Número de documento</th>
					<th>Teléfono</th>
					<th>Email</th>
					<th>Opciones</th>
				</thead>
               @foreach ($personas as $per)
				<tr>
					<td>{{ $per->nombre}}</td>
					<td>{{ $per->tipo_documento}}</td>
					<td>{{ $per->num_documento}}</td>
					<td>{{ $per->telefono}}</td>
					<td>{{ $per->email}}</td>

					<td>
						<a href="{{URL::action('ClienteController@edit',$per->idpersona)}}" class="btn btn-primary" role="button" aria-pressed="true">Editar</a>
                         <a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('ventas.cliente.modal')
				@endforeach
			</table>
		</div>
		{{$personas->render()}}
	</div>
</div>

@endsection