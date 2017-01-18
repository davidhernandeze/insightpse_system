@extends('layout.master')
@section('contenido')

    <div class="row">
        <h3 class="page-header"> Registrar personal</h3>
    </div>



    <fieldset>
        <legend>Ingrese los datos del personal</legend>

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-2 control-label">Nombre</label>

                    <div class="col-lg-10">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                               autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-2 control-label">E-Mail</label>

                    <div class="col-md-10">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                               required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('profile_type') ? ' has-error' : '' }}">
                    <label for="profile_type" class="col-md-2 control-label">Tipo de usuario</label>

                    <div class="col-md-10">
                        {{ Form::select('profile_type',
                         [ 'professional' => 'Profesional', 'assistant' => 'Asistente'],
                          null, ['placeholder' => 'Seleccione...', 'class' => 'form-control', 'required']) }}

                        @if ($errors->has('profile_type'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('profile_type') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-2 control-label">Password</label>

                    <div class="col-md-10">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-2 control-label">Confirmar Password</label>

                    <div class="col-md-10">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>

    </fieldset>



@endsection
