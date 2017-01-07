<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSIGHTPSE</title>

    <!-- jquery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Core CSS - Include with every page -->
    <link href="{{asset('plugins/bootstrap/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
    <link href="{{asset('plugins/pace/pace-theme-big-counter.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/main-style.css')}}" rel="stylesheet"/>

    <!-- Page-Level CSS -->
    <link href="{{asset('plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet'"/>


    <!-- calendar plug-in -->
    <link href="{{asset('calendar/css/jquery.datepick.css')}}" rel="stylesheet">


</head>
<body>
<!--  wrapper -->
<div id="wrapper">
    <!-- navbar top -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
        <!-- navbar-header -->
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <h2 style="color: white;">INSIGHTPSE</h2>
            </a>
        </div>
        <!-- end navbar-header -->
        <!-- navbar-top-links -->
        <ul class="nav navbar-top-links navbar-right">


            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-3x"></i>
                </a>
                <!-- dropdown user-->
                <ul class="dropdown-menu dropdown-user">
                    {{--<li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>--}}
                    {{--</li>--}}
                    {{--<li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>--}}
                    {{--</li>--}}
                    <li class="divider"></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </li>
                </ul>
                <!-- end dropdown-user -->
            </li>
            <!-- end main dropdown -->
        </ul>
        <!-- end navbar-top-links -->

    </nav>
    <!-- end navbar top -->

    <!-- navbar side -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <!-- sidebar-collapse -->
        <div class="sidebar-collapse">
            <!-- side-menu -->
            <ul class="nav" id="side-menu">
                <li>
                    <!-- user image section-->
                    <div class="user-section">
                        <div class="user-section-inner">
                            <img src="{{asset('img/user.jpg')}}" alt="">
                        </div>
                        <div class="user-info">
                            <div>{{Auth::user()->name}}</div>
                            <div class="user-text-online">
                                <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;En linea
                            </div>
                        </div>
                    </div>
                    <!--end user image section-->
                </li>

                </li>
                <li class="selected">
                    <a href="master.blade.php"><i class="fa fa-dashboard fa-fw"></i>Inicio</a>
                </li>

                <li>
                    <a href="{{asset('pacientes')}}"><i class="fa fa-flask fa-fw"></i>Pacientes</a>
                </li>
                <li>
                    <a href="{{asset('citas')}}"><i class="fa fa-table fa-fw"></i>Citas</a>
                </li>
                @if(Auth::user()->profile_type == 'root')
                <li>
                    <a href="{{asset('register')}}"><i class="fa fa-edit fa-fw"></i>Registrar Personal</a>
                </li>
                @endif


                <!-- end side-menu -->
            </ul>
            <!-- end sidebar-collapse -->
        </div>
    </nav>
    <!-- end navbar side -->
    <!--  page-wrapper -->
    <div id="page-wrapper">
        @yield('contenido')


    </div>
    <!-- end page-wrapper -->

</div>
<!-- end wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="{{asset('plugins/jquery-1.10.2.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('plugins/pace/pace.js')}}"></script>

<!-- Page-Level Plugin Scripts-->
<script src="{{asset('plugins/morris/raphael-2.1.0.min.js')}}"></script>

<!-- Calendar-->
<script src="{{asset('calendar/js/jquery.plugin.min.js')}}"></script>
<script src="{{asset('calendar/js/jquery.datepick.js')}}"></script>


<!-- DataTables JavaScript -->
<script src="{{asset('../vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('../vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('../vendor/datatables-responsive/dataTables.responsive.js')}}"></script>

</body>

</html>
