@extends ('layout.master')
@section ('contenido')





    <div class="row">
        <h3 class="page-header"> Nuevo Paciente</h3>
    </div>

    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <fieldset>
            <legend>Ingrese los datos del paciente</legend>

            {!!Form::open(array('url' => 'pacientes/store', 'method' => 'POST', 'autocomplete' => 'off',
             'data-toggle' => 'validator', 'class' => 'form-horizontal')) !!}
            {{Form::token()}}

            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Nombre</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="names" placeholder="Nombre">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Apellidos</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="surnames" placeholder="Apellidos">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Teléfono</label>
                <div class="col-lg-10">
                    <input type="number" class="form-control" name="tel" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Fecha de nacimiento</label>
                <div class="col-lg-10">
                    <input type="date" class="form-control" name="birthday" placeholder="dd/mm/aaaa">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">Sexo</label>
                <div class="col-lg-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="sex" value="Masculino" checked="">
                            Masculino
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="sex" value="Femenino">
                            Femenino

                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Limpiar Campos</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </fieldset>
    {!!Form::close()!!}


@endsection