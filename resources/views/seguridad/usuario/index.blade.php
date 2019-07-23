@extends('layouts.admin')
@section('contenido')
<h1> Listado de Usuarios </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="usuario/create" class="btn btn-success btn-block stretched-link"> Añadir Usuario </a>
    </div>
</div>
@include('seguridad.usuario.search')
<table class="table table-striped table-bordered table-condensed table-hover">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usu)
        <tr>
            <td>{{$usu->name}}</td>
            <td>{{$usu->email}}</td>
            <td>
                <a href="{{URL::action('UsuarioController@edit',$usu->id)}}"  class="btn btn-primary" role="button" aria-pressed="true">
                    Editar
                </a>                    
                <a href="" data-target="#modal-delete-{{$usu->id}}" data-toggle="modal">
                    <button class="btn btn-danger">Eliminar</button>
                </a>
            </td>
        </tr>
        @include('seguridad.usuario.modal')
        @endforeach
    </tbody> 
</table>
{!! $usuarios->render() !!}           


@endsection