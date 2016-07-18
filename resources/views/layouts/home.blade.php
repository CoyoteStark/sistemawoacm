<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema WOACM</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('assets/css/plugins/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Sistema WOACM</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                @if (Auth::guest()==false)
                <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 <i class="fa fa-user"></i>
                  {{Auth::user()->name}}
                  <b class="caret">
                  </b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="{{url('/')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ URL::route('users.index') }}"><i class="fa fa-user fa-fw"></i> Usuarios</a>
                    </li>
                    <li>
                        <a href="{{ URL::route('social.index')}}"><i class="fa fa-twitter on fa-square-o"></i> Redes Sociales</a>
                    </li>
                    <li>
                        <a href="{{ URL::route('rol.index') }}"><i class="fa fa-fw fa-edit"></i> Roles</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-unlock-alt"></i> Permiso</a>
                    </li>
                    <li>
                        <a href="{{ URL::route('clientes.index') }}"><i class="fa fa-fw fa-users"></i> Clientes</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-thumbs-up"></i> Community Manager</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
<!-- inicio-->
      @yield('content')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ assets('assets/js/jquery.js')}}  "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ assets('assets/js/bootstrap.min.js')}} "></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{assets('assets/js/plugins/morris/raphael.min.js')}} "></script>
    <script src="{{assets('assets/js/plugins/morris/morris.min.js')}} "></script>
    <script src="{{assets('assets/js/plugins/morris/morris-data.js')}}"></script>

</body>

</html>
