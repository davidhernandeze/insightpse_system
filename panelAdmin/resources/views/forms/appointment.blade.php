@extends ('layout.master')
@section ('contenido')





    <div class="row">
        <h3 class="page-header"> Formulario de registro de cita</h3>
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
        <legend>Ingrese los datos de la cita</legend>
        <hr>

        {!!Form::open(array('url' => 'citas/store', 'method' => 'POST', 'autocomplete' => 'off',
         'data-toggle' => 'validator', 'class' => 'form-horizontal')) !!}
        {{Form::token()}}


        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label disabled">Fecha</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" readonly="readonly" name="fecha" value="{{$date}}" />
                <input type="hidden" class="form-control" readonly="readonly" name="date" value="{{$sql_date}}" />
            </div>
        </div>

        <div class="form-inline">

            <div class="form-group">
                <label for="inputEmail" class="col-lg-6 control-label">Hora inicio</label>
                <div class="col-lg-1">
                    <input type="text" class="form-control" name="hora_ini" value="{{$hour}}" readonly="readonly" />
                    <input type="hidden" class="form-control" name="hour" value="{{$sql_hour}}" readonly="readonly" />
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail" class="col-lg-7 control-label">Duración</label>
                <div class="col-lg-1">
                    <input type="text" class="form-control" name="duracion" placeholder="HH:MM" />
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail" class="col-lg-9 control-label">Hora final</label>
                <div class="col-lg-1">
                    <input type="time" class="form-control" name="hora_fin" placeholder="Apellidos">
                </div>
            </div>


        </div>

        <hr>


        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Paciente</label>
            <div class="col-lg-8">
                <select class="selectpicker form-control" data-live-search="true" name="paciente" required>

                    <option value="" disabled selected>Seleccione...</option>

                    @foreach($patients as $patient)

                        <option value="{{$patient->id}}">{{$patient->names}} {{$patient->surnames}}</option>

                    @endforeach
                </select>
            </div>
            <div class="col-lg-2">
                <a class="btn btn-primary" href="/pacientes/create">Nuevo paciente</a>

            </div>
        </div>



        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Agenda</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="agenda_nombre" value="{{$professional->name}}" readonly="readonly">
                <input type="hidden" class="form-control" name="agenda" value="{{$professional->id}}" readonly="readonly">
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Servicio</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="servicio" placeholder="Servicio...">
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Motivo de consulta</label>
            <div class="col-lg-10">
                    <textarea class="form-control" rows="3" name="motivo_consulta"
                              placeholder="Escriba el motivo de consulta">
                        </textarea>
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