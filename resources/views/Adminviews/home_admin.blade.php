@extends('layouts.blank_admin')

@push('stylesheets')
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>
    <script src="public/js/jquery.min.js" type="text/javascript"></script>
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-group"></i>      Usuarios Registrados</span>
              <div class="count">{{ $count[0] }}</div>
              <span class="count_bottom"><i class="green">4% </i>Del último mes</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-archive"></i>     Total de paquetes</span>
              <div class="count">{{ $count[1] }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> De ultimo mes</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-warning"></i>     Paquetes sin reclamar</span>
              <div class="count">{{ $count[3] }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-check"></i>     Paquetes entregados</span>
              <div class="count green">{{ $count[3] }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>Del ultimo mes</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-plane"></i>     Paquetes en tránsito</span>
              <div class="count">{{ $count[3] }}</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i>Del ultimo mes</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-bell"></i>     Paquetes Alertados</span>
              <div class="count">{{ $count[2] }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>Del ultimo mes</span>
            </div>
          </div>
         <div class="container">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars "></i>IFS</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-xs-4">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left">
                        <li><a href="#mipack" data-toggle="tab" aria-expanded="false"><i class="fa fa-archive"></i>        Paquetes</a>
                        </li>
                        <li><a href="#user" data-toggle="tab" aria-expanded="false"><i class="fa fa-user"></i>        Usuario</a>
                        </li>
                      </ul>
                    </div>

                     <div class="col-xs-8">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="mipack">
                          <p class="lead">Mis paquetes</p>
                          <ul class="nav nav-tabs tabs-left">
                          <li class=""><a href="{{url('/allpackages')}}"  aria-expanded="false">Paquetes</a>
                        </li>

                        <li class=""><a href="{{url('/allpackages/undelivarable')}}"  aria-expanded="false">Paquetes sin reclamar</a>
                        </li>
                         <li class=""><a href="{{url('/allpackages/alert')}}"  aria-expanded="false">Paquetes alertados</a>
                        </li>
                        <li class=""><a href="{{url('/allpackages/inTransit')}}"  aria-expanded="false">Paquetes en tránsito</a>
                        </li>
                        <li class=""><a href="{{url('/allpackages/delivered')}}"  aria-expanded="false">Paquetes entregados</a>
                        </li>
                          </ul>
                        </div>

                        <div class="tab-pane " id="user">
                          <p class="lead">Usuarios</p>
                          <ul class="nav nav-tabs tabs-left">
                          <li class=""><a href="{{url('/newadmin')}}" aria-expanded="false">Crear nuevo administrador</a>
                        </li>
                        <li class=""><a href="{{url('/seealladmins')}}"  aria-expanded="false">Ver todos los administradores</a>
                        </li>
                        <li class=""><a href="{{url('/seealllcients')}}"  aria-expanded="false">Ver todos los usuarios clientes</a>
                        </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                </div>
              </div>

      </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->


    <script type="text/javascript">
      $(document).ready(function(){
        $(".flip").click(function(){
          $(".panel".slideToggle("slow"));
        });
      });

    </script>
@endsection
