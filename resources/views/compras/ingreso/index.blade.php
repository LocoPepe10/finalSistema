@extends('layouts.admin')
@section('contenido')
<h1> Lista de ingresos </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="ingreso/create" class="btn btn-success btn-block stretched-link"> Añadir Ingreso </a>
    </div>
</div>
@include('compras.ingreso.search')
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
            @foreach($ingresos as $ing)
            <tr>
                <td>{{$ing->fecha_hora}}</td>
                <td>{{$ing->nombre}}</td>
                <td>{{$ing->tipo_comprobante.": ".$ing->serie_comprobante."-".$ing->num_comprobante}}</td>
               
                <td>{{$ing->impuesto}}</td>                
                <td>{{$ing->total}}</td>
                <td>{{$ing->estado}}</td>
                
                <td>
                    <a href="{{URL::action('IngresoController@show',$ing->idingreso)}}"  class="btn btn-primary" role="button" aria-pressed="true">
                        Detalles
                    </a>                    
                    <a href="" data-target="#modal-delete-{{$ing->idingreso}}" data-toggle="modal">
                        <button class="btn btn-danger">Anular</button>
                    </a>
                </td>
            </tr>
            @include('compras.ingreso.modal')
            @endforeach
        </table>
        {{$ingresos->render()}}
    </div>
</div>
@endsection