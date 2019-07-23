@extends('layouts.app')

@section('content')
    <div class="row justify-content-center my-2">
        <div class="col-md-6 offset-md-3">
            <img src="{{URL::asset('img/invntry.png')}}" class="rounded-circle">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 offset-md-4 mt-3">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Ingrese Email...">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <p class="text-justify"><small>{{ $errors->first('email') }}</small></p>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Ingrese Contraseña...">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group justify-content-center">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">
                                    Acceder
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
@endsection
