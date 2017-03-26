@extends ('layout.master')
@section ('contenido')

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Cita en curso</h1>
            <h2 class="page-header">Paciente: {{$patient}}</h2>
        </div>
    </div>

    <input id="appointment_id" type="hidden" value="{{$appointment->id}}">

    <div class="row">

        <div class="col-sm-3">
            <p>Agregar nuevo formulario</p>
            <select id="select" class="custom-select">
                <option slected value="admision">Admisión</option>
                <option value="primera_vez">Primera vez</option>
                <option value="seguimiento">Seguimiento</option>
                <option value="egreso">Egreso</option>
            </select>
            <button id="btn-create" class="btn btn-xs btn-success" >
                Agregar
            </button>
        </div>

        <div class="col-sm-8">

            <div id="list" style="height: 600px; overflow-y: scroll"></div>

        </div>

    </div>


    <script>

        $(function(){

            $('#btn-create').click(function(){

               var type = $('#select').val();
                var appointment_id = $('#appointment_id').val();

                window.open('/recepcion/form/'+appointment_id+'/'+type);

            });

        });

        function refreshForms(appointmentId){
            $.ajax({
                dataType: "json",
                url: 'citas/forms/' + appointmentId,
                success: function (data) {

                    $('#list').empty();

                        console.log(data);

                            appointmentData =
                                    '<div class="panel panel-primary">' +
                                        '<div class="panel-heading">' +
                                        hour + '  '+
                                            '<div class="btn-group " role="group" aria-label="...">' +
                                                '<button class="btn btn-xs btn-success btnReceive"' +
                                                'appoint_id='+appointment.id+'> Recibir paciente' +
                                                '</button>' +
                                                '<button class="btn btn-xs btn-danger btnCancel" appoint_id="'+appointment.id+'"> Cancelar cita' +
                                                '</button>' +
                                            '</div>'+
                                            '<div>' +
                                            appointment.names + ' ' + appointment.surnames +
                                            '</div>' +
                                        '</div>' +
                                    '</div>';


                        $('#list').append(appointmentData);

                    }

                });


        }


    </script>



@endsection
