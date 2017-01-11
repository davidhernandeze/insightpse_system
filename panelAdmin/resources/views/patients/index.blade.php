@extends ('layout.master')
@section ('contenido')

    <!-- DataTables -->


    <div class="row">
        <h3 class="page-header"> Pacientes registrados</h3>
    </div>
    <div class="row form-group">
        <input type="button" id="btnNuevo" class="btn btn-primary pull-right" value="Registrar nuevo paciente"
               data-toggle="tooltip" title="Registrar Paciente">
    </div>
    <div class="row panel panel-default">
        <div class="panel-heading">
            Lista de pacientes
        </div>
        <div class="panel-body">
            <table id="dtPatients" class="table display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha de nacimiento</th>
                    <th>Sexo</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    {{--@include('layouts.confirm', array('mensaje' => '¿Está seguro que desea borrar este dispositivo?','url'=>'/dispositivos','id'=>'modal-confirm'))--}}

    <script>

        $(document).ready(function(){

            $('#btnNuevo').click(function(){

                window.location.href = 'pacientes/create';

            });

            $('#dtPatients').DataTable({
                "language":{
                    "url": "js/Spanish.json"
                },
                "processing": true,
                "serverSide": true,
                "ajax": "pacientes/array",
                "columns": [
                    {data: 'id'},
                    {data: 'names'},
                    {data: 'surnames'},
                    {data: 'birthday'},
                    {data: 'sex'},
                    {data: 'tel'},
                    {data: 'email'},
                ],
                "columnDefs": [
                    {
                        "targets": 0,
                        "searchable": false,
                        "visible": false
                    },

                    {
                        "targets": 7,
                        "searchable": false,
                        "data": null,
                        "defaultContent": "<button action='edit' type='button' class='btn btn-success btn-xs' title='Editar dispositivo'>" +
                        "<span class='glyphicon glyphicon-edit' aria-hidden='true'></span> " +
                        "</button>"
                    },

                    {
                        "targets": 8,
                        "searchable": false,
                        "data": null,
                        "defaultContent": "<button action='delete' type='button' class='btn btn-danger btn-xs' " +
                        "data-toggle='modal' title='Eliminar dispositivo' data-target='#modal-confirm'>" +
                        "<span class='glyphicon glyphicon-trash' aria-hidden='true'></span> " +
                        "</button>"
                    }
                ]

            });

            $('#dtDispositivos tbody').on( 'click', 'button', function () {

                var action = $(this).attr('action');
                var data = $('#dtDispositivos').DataTable().row( $(this).parents('tr') ).data();

                switch (action){
                    case 'edit':
                        window.location.href = 'dispositivos/edit/'+data.IdDispositivo;
                        break;

                    case 'delete':
                        $('#btnOkConfirm').on( 'click', function () {
                            window.location.href = 'dispositivos/delete/' + data.IdDispositivo;
                        });
                        break;
                }
            } )

        });

    </script>
@endsection