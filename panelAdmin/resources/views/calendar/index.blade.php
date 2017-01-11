@extends ('layout.master')
@section ('contenido')

    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Calendario de citas</h1>
        </div>
    </div>


    <div class="row">

        <div class="col-lg-3">

            <div id="inlineDatepicker"></div>

        </div>

        <div class="col-lg-9">


            <h1 class="page-header" id="selectedDay">Citas del hoy</h1>

            <div  id="list" style="height: 600px; overflow-y: scroll"> </div>


        </div>


        <script>

            $(function () {

                var today = new Date();
                refreshAppointments(today);


                $('#inlineDatepicker').datepick({

                    onSelect: function (dates) {

                        var date = new Date(dates);
                        var today = new Date();

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

                        refreshAppointments(date);

                    }
                });

            });

            function refreshAppointments(date){

                var formated_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();

                $.ajax({
                    dataType: "json",
                    url: 'citas/'+formated_date,
                    success: function(data){

                        $('#list').empty();

                        var hoursToShow = ['08:00', '08:30', '09:00', '09:30', '10:00', '10:30', '11:00', '11:30',
                            '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30',
                            '17:00', '17:30', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30', '21:00', '21:30',
                            '22:00', '22:30', '23:00'];

                        hoursToShow.forEach(function(hour){

                            var appointment_search = data.filter(function( obj ) {

                                //reduce the hh:mm:ss format to hh:mm only
                                var appointmentHour = obj.hour.substring(0, obj.hour.length - 3);

                                if(appointmentHour == hour){

                                    return obj;

                                }

                            });

                            var appointment = appointment_search[0];

                            var appointmentData;

                            if(appointment_search.length != 0){

                                appointmentData =
                                        '<div class="panel panel-primary">'+
                                        '<div class="panel-heading">'+
                                        hour+
                                        '</div>'+
                                        '<div class="panel-body">'+
                                        appointment.names + ' ' + appointment.surnames +
                                        '</div>'+
                                        '</div>';

                            }
                            else{

                                appointmentData =
                                        '<div class="panel panel-info">'+
                                        '<div class="panel-heading">'+
                                        hour+
                                        '</div>'+
                                        '<div class="panel-body">'+
                                        'Cita disponible para asignación'+
                                        '</div>'+
                                        '</div>';

                            }

                            $('#list').append(appointmentData);

                        }); //end foreach hours

                    } // end success function

                }); //end jquery ajax

            }


        </script>


@endsection