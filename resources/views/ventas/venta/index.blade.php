@extends('layouts.admin')
@section('contenido')
<h1> Listado de Ventas </h1>
<div class="row justify-content-left">
    <div class="col-md-2">
        <a href="venta/create" class="btn btn-success btn-block stretched-link"> Nueva Venta </a>
    </div>
</div>
@include('ventas.venta.search')
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
            @foreach($ventas as $ven)
            <tr>
                <td>{{$ven->fecha_hora}}</td>
                <td>{{$ven->nombre}}</td>
                <td>{{$ven->tipo_comprobante.": ".$ven->serie_comprobante."-".$ven->num_comprobante}}</td>
               
                <td>{{$ven->impuesto}}</td>                
                <td>{{$ven->total_venta}}</td>
                <td>{{$ven->estado}}</td>
                
                <td>
                    <a href="{{URL::action('VentaController@show',$ven->idventa)}}" class="btn btn-primary" role="button" aria-pressed="true">
                        Detalles
                    </a>                    
                    <a href="" data-target="#modal-delete-{{$ven->idventa}}" data-toggle="modal" class="btn btn-danger" role="button" aria-pressed="true">
                        Anular
                    </a>
                </td>
            </tr>
            @include('ventas.venta.modal')
            @endforeach
        </table>
        {{$ventas->render()}}
    </div>
</div>
@endsection