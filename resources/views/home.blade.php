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
                        <li><a href="#research" data-toggle="tab" aria-expanded="false"><i class="fa fa-search"></i>Buscar</a>
                        </li>
                      </ul>
                    </div>

                     <div class="col-xs-8">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="mipack">
                          <p class="lead">Mis paquetes</p>
                          <ul class="nav nav-tabs tabs-left">
                          <li class=""><a href="#" data-toggle="tab" aria-expanded="false">Mis paquetes</a>
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
                           <li class=""><a href="{{ url('/newpackage')}} "> Alértanos tus compras</a>
                        </li>
                          </ul>
                        </div>

                        <div class="tab-pane " id="research">
                          <p class="lead">Buscar</p>
                          <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#searchta" data-toggle="tab" aria-expanded="true">Busca por lista de desconocidas</a>
                        </li>
                        <li class=""><a href="#searchinter" data-toggle="tab" aria-expanded="false">Busca Por guia area o trakcing internacional</a>
                        </li>
                        <li class=""><a href="#searchstore" data-toggle="tab" aria-expanded="false"> Por Guía Aérea o # de Tracking Domestico USA emitido por la tienda:</a>
                        </li>
                      </ul>
                        <div class="col-xs-8">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="searchta" >
                          <p class="lead">Busca por lista de desconocidas</p>
                          <p> Identifica tus paquetes en nuestra lista de desconocidos: Ingresa el # de tracking Fedex, DHL, UPS…</p>
                          <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
                               <input type="text" class="form-control" placeholder="#" aria-describedby="basic-addon1">
                          </div>
                          <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default ">Buscar</button>
                          </div>
                        </div>
                        <div class="tab-pane" id="searchinter">
                               <p class="lead">Busca por guía aérea o # de tracking internacional: </p>
                          <p>Ingresa el # de guia aérea emitida por transExpress</p>
                          <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
                               <input type="text" class="form-control" placeholder="#" aria-describedby="basic-addon1">
                          </div>
                          <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default ">Buscar</button>
                          </div>
                        </div>
                        <div class="tab-pane" id="searchstore">
                            <p class="lead">Busca por guía aérea o # de tracking D
                            domestico USA emitido por la tienda:</p>
                            <p>Ingresa # de guía FEDEX, UPS, DHL, USPS…</p>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="#" aria-describedby="basic-addon1">
                            </div>
                            <div class="btn-group" role="group" aria-label="...">
                              <button type="button" class="btn btn-default ">Buscar</button>
                            </div>
                        </div>

                      </div>
                    </div>
                        </div>


                      </div>
                    </div>
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

    <script type="text/javascript">
      $(document).ready(function(){
        $(".flip").click(function(){
          $(".panel".slideToggle("slow"));
        });
      });

    </script>
@endsection
