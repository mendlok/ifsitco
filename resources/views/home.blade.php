@extends('layouts.blank')

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
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <a href="{{ url('/searchByShop')}}"></a>
              <span class="count_top"><i class="fa fa-user"></i>  Mis paquetes</span>
              <div class="count">{{ $count[0] }}</div>
              <span class="count_bottom"><i class="green">4% </i> Desde el último mes</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Paquetes en Miami</span>
              <div class="count">{{ $count[1] }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i>Desde el último mes</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i>  Paquetes en transito</span>
              <div class="count">{{ $count[2] }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>Desde el último mes</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i>  Paquetes entregados</span>
              <div class="count">{{ $count[3] }}</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i>Desde el último mes</span>
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
                        <li class="active"><a href="#mipack" data-toggle="tab" aria-expanded="true">Mis paquetes</a>
                        </li>
                      </ul>
                    </div>

                     <div class="col-xs-8">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="mipack">
                          <p class="lead">Mis paquetes</p>
                          <ul class="nav nav-tabs tabs-left">
                          <li class=""><a href="{{url('/mypackages')}}">Mis paquetes</a>
                        </li>

                        <li class=""><a href="#alertmiami" data-toggle="tab" aria-expanded="false">  Alertados y pendientes de recibo en Miami</a>
                        </li>

                        <li class=""><a href="#" data-toggle="tab">Retenidos en Miami</a>
                        </li>
                           <li class=""><a href="#" data-toggle="tab" >En tránsito:Miami - Destino Final</a>
                        </li>
                           <li class=""><a href="#" data-toggle="tab" >Entregados</a>
                        </li>
                           <li class=""><a href="#" data-toggle="tab" > Retenidos por falta de Factura Comercial</a>
                        </li>
                           <li class=""><a href="{{ url('/newpackage') }} "> Alértanos tus compras</a>
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
