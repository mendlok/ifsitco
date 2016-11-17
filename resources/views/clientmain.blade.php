@extends('layouts.blank')

@push('stylesheets')
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i>Mis paquetes</span>
              <div class="count">105</div>
              <span class="count_bottom"><i class="green">4% </i>Desde el último mes</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i>Paquetes en Miami</span>
              <div class="count">5</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i>Desde el último mes</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i>Paquetes en transito</span>
              <div class="count">12</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>Desde el último mes</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i>Paquetes entregados</span>
              <div class="count">7</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i>Desde el último mes</span>
            </div>
          </div>
          <div class="container" style="background-color: white;">
              <div class="row">
                 <div class="col-md-6">
                       <h2>Mis paquetes</h2>
                 </div>
                  <div class="col-md-6">
                     <h2>Buscar</h2>
                  </div>
              </div>
      </div>
    </div>
      
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
@endsection