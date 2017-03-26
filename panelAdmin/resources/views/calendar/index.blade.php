@extends ('layout.master')
@section ('contenido')

    <div class="row">
        <!-- Pareceiveer -->
        <div class="col-lg-12">
            <h1 class="page-header">Citas de
                <b id="professional_name" pro_id="{{Auth::user()->id}}">{{Auth::user()->name}}</b>
            </h1>
            <input id="input_prof_id" type="hidden" value="{{Auth::user()->id}}">
        </div>
    </div>


    <div class="row">

        <div class="col-lg-3">

            <div class="form-group">
                <div id="inlineDatepicker"></div>
            </div>

            <div class="form-group">
                <div class="btn-group">
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Seleccione profesional
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" id="professionals_dropdown">
                        @foreach($professionals as $professional)
                            <li professional_id="{{$professional->id}}"><a href="#">{{$professional->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

       </div>

        <div class="col-lg-9">


            <h3 class="page-header" id="selectedDay">Citas del hoy</h3>

            <div id="list" style="height: 600px; overflow-y: scroll"></div>


        </div>
    </div>


    <script>

        var professional_id;

        $(function () {

            professional_id = $('#professional_name').attr('pro_id');
            var today = new Date();
            var selected_date = today;

            refreshAppointments(today, professional_id);

            $('#professionals_dropdown').on('click', 'li', function (event) {

                $('#professional_name').text($(this).text());

                professional_id = $(this).attr('professional_id')

                $('#inlineDatepicker').datepick('setDate', selected_date);

            });


            $('#inlineDatepicker').datepick({

                onSelect: function (dates) {

                    selected_date = new Date(dates);

                    var date = new Date(dates);

                    var weekday = new Array(7);
                    weekday[0] = "Domingo";
                    weekday[1] = "Lunes";
                    weekday[2] = "Martes";
                    weekday[3] = "Miércoles";
                    weekday[4] = "Jueves";
                    weekday[5] = "Viernes";
                    weekday[6] = "Sábado";


                    var monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
                    ];
                    var month = monthNames[date.getMonth()];

                    var dayOfTheWeek = weekday[date.getDay()];
                    var dayOfTheMonth = date.getDate();

                    var year = date.getFullYear();

                    var legend = "Citas del " + dayOfTheWeek + " " + dayOfTheMonth + " de " + month + " del " + year;
                    var formatedDate = $.datepicker.formatDate('dd-mm-yy', date);
                    var formatedToday = $.datepicker.formatDate('dd-mm-yy', today);

                    if (formatedDate == formatedToday) {
                        $('#selectedDay').text("Citas de hoy");
                    }
                    else {
                        $('#selectedDay').text(legend);
                    }

                    refreshAppointments(date, professional_id);

                }
            });



        });

        function refreshAppointments(date, professional_id) {

            var formated_date = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();

            $.ajax({
                dataType: "json",
                url: 'citas/' + professional_id + '/' + formated_date,
                success: function (data) {

                    $('#list').empty();

                    var hoursToShow = ['08:00', '08:30', '09:00', '09:30', '10:00', '10:30', '11:00', '11:30',
                        '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30',
                        '17:00', '17:30', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30', '21:00', '21:30',
                        '22:00', '22:30', '23:00'];

                    hoursToShow.forEach(function (hour) {

                        var appointment_search = data.filter(function (obj) {

                            //reduce the hh:mm:ss format to hh:mm only
                            var appointmentHour = obj.hour.substring(0, obj.hour.length - 3);

                            if (appointmentHour == hour) {

                                return obj;

                            }

                        });

                        var appointment = appointment_search[0];

                        var appointmentData;

                        if (appointment_search.length != 0) {

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

                        }
                        else {

                            appointmentData =
                                    '<div class="panel panel-info">' +
                                    '<div class="panel-heading">' +
                                    hour +
                                    '<div>' +
                                    '<button class="btn btn-xs btn-success btnAssign"' +
                                    'hour="' + hour + '" ' + 'date="' + formated_date + '"> Asignar cita</button>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>';


                        }

                        $('#list').append(appointmentData);

                    }); //end foreach hours

                    loadEvents();

                } // end success function

            }); //end jquery ajax

        }

        function loadEvents(){

            $('.btnAssign').click(function () {

                var hour = $(this).attr('hour');
                var date = $(this).attr('date');

                console.log('Se asignará en la hora: ' + hour + ' en la fecha: ' + date
                        + 'al usuario: ' + professional_id);


                window.location.href = 'citas/create/?' + 'prof_id='+ professional_id +
                        '&date=' + date + '&hour='+hour;
            });

            $('.btnReceive').click(function(){

                var appointmentId = $(this).attr('appoint_id');

                window.location.href = 'recepcion/'+appointmentId;

            });

            $('.btnCancel').click(function(){

                var appoint_id = $(this).attr('appoint_id');

                window.location.href = 'citas/delete/'+appoint_id;

            });

        }


    </script>


@endsection