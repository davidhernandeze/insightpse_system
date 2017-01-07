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

            <div class="panel panel-info">
                <div class="panel-heading">
                    8:30am
                </div>
                <div class="panel-body">
                    DAVID HERNÁNDEZ ESCALANTE
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    8:30am
                </div>
                <div class="panel-body">
                    DAVID HERNÁNDEZ ESCALANTE
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    8:30am
                </div>
                <div class="panel-body">
                    DAVID HERNÁNDEZ ESCALANTE
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    8:30am
                </div>
                <div class="panel-body">
                    DAVID HERNÁNDEZ ESCALANTE
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    8:30am
                </div>
                <div class="panel-body">
                    DAVID HERNÁNDEZ ESCALANTE
                </div>
            </div>


        </div>


    </div>

    <script>

        $(function () {

            $('#inlineDatepicker').datepick({

                onSelect: function(dates) {

                    var date = new Date(dates);
                    var today = new Date();

                    var weekday = new Array(7);
                    weekday[0] = "Domingo";
                    weekday[1] =  "Lunes";
                    weekday[2] = "Martes";
                    weekday[3] = "Miércoles";
                    weekday[4] = "Jueves";
                    weekday[5] = "Viernes";
                    weekday[6] = "Sábado";


                    var monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
                    ];
                    var month = monthNames[date.getMonth()];

                    var dayOfTheWeek  = weekday[date.getDay()];
                    var dayOfTheMonth = date.getDate();

                    var year = date.getFullYear();

                    var legend = "Citas del " + dayOfTheWeek + " " + dayOfTheMonth  + " de " + month + " del " + year;
                    var formatedDate = $.datepicker.formatDate('dd-mm-yy', date);
                    var formatedToday = $.datepicker.formatDate('dd-mm-yy', today);

                    if(formatedDate == formatedToday){
                        $('#selectedDay').text("Citas de hoy");
                    }
                    else{
                        $('#selectedDay').text(legend);
                    }



                }
            });

        });


    </script>


@endsection