@extends('layouts.admin')
@section('contenido')
<h1> Lista de Articulos </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="articulo/create" class="btn btn-success btn-block stretched-link"> Añadir Articulo </a>
    </div>
</div>
@include('almacen.articulo.search')
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
            @foreach($articulos as $art)
            <tr>
                <td>{{$art->nombre}}</td>
                <td>{{$art->codigo}}</td>
                <td>{{$art->categoria}}</td>
                <td>{{$art->stock}}</td>
                <td>
                    <img src="{{asset('imagenes/articulos/'.$art->imagen)}}" alt="{{$art->nombre}}" height="100px" width="100px" class="img-thumbnail"/>
                </td>
                <td>
                    {{$art->estado}}
                </td>
                <td>
                    <a href="{{URL::action('ArticuloController@edit',$art->idarticulo)}}"  class="btn btn-primary" role="button" aria-pressed="true">
                        Editar
                    </a>                    
                    <a href="" data-target="#modal-delete-{{$art->idarticulo}}" data-toggle="modal">
                        <button class="btn btn-danger">Eliminar</button>
                    </a>
                </td>
            </tr>
            @include('almacen.articulo.modal')
            @endforeach
        </table>
        {{$articulos->render()}}
    </div>
</div>
@endsection