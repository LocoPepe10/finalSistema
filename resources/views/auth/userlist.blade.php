@extends('layouts.app')
@section('content')
        @foreach($usuarios as $usu)
        <tr>
            <td>{{$usu->name}}</td>
            <td>{{$usu->email}}</td>
        </tr>
        @endforeach
@endsection