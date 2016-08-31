<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galamedia Simpeg</title>

     

    <!-- Bootstrap Core CSS -->
  
     {!!Html::style('../bower_components/bootstrap/dist/css/bootstrap.min.css')!!}

    <!-- MetisMenu CSS -->
    
     {!!Html::style('./bower_components/metisMenu/dist/metisMenu.min.css')!!}

    <!-- Custom CSS -->
    
     {!!Html::style('../dist/css/sb-admin-2.css')!!}
    <!-- Custom Fonts -->
   
     {!!Html::style('../bower_components/font-awesome/css/font-awesome.min.css')!!}
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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else   
            
           @include('includes.headbar')
            <!-- /.navbar-top-links -->
            @include('includes.sidebar')
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @include('deleteform.modal')
                 @yield('content')
                
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endif
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    {!!Html::script('../bower_components/jquery/dist/jquery.min.js')!!}
    <!-- Bootstrap Core JavaScript -->

    {!!Html::script('../bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
    <!-- Metis Menu Plugin JavaScript -->
  
    {!!Html::script('../bower_components/metisMenu/dist/metisMenu.min.js')!!}
    <!-- Custom Theme JavaScript -->
    
    {!!Html::script('../dist/js/sb-admin-2.js')!!}

  <!-- Data Tables -->
    
    {!!Html::script('../bower_components/datatables/media/js/jquery.dataTables.min.js')!!}
    {!!Html::script('../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')!!}
    {!!Html::script('../bower_components/datatables-responsive/js/dataTables.responsive.js')!!}
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
