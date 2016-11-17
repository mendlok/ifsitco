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
        <h1>Mis paquetes</h1>
        @foreach($packages as $package)
        <div class="container menu" style="background-color: white;border-top: solid;">
            <div class="rows" style="margin:2%;">
                <div class="col-lg-12 col-sm-6 col-xs-12" >
                 <div class="col-lg-4 col-sm-6 col-xs-12 " >
                <img src="{{ asset('images/box.png') }}" class="img-responsive fotos" style="height: 152px;">
                <br>
                    <span class="label label-primary" style="font-size: 1em;margin-left: 7%;"><a href=" " style="color:white;">Ver producto</a></span>
                </div>
                 <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Paquetes Entregados</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>Courier</th>
                          <th>Tracking</th>
                          <th>Descrición</th>
                          <th>Valor</th>
                          <th>Estado</th>
                          <th>Factura interna</th>
                        </tr>
                      </thead>
                      <tbody >
                      <tr>
                         <th style="text-align: center;">{{$package->courrier}}</th>
                          <th style="text-align: center;">{{$package->tracking}}</th>
                          <td style="text-align: center;">{{$package->product_description}}</td>
                          <td style="text-align: center;">{{$package->value}}</td>
                          <td style="text-align: center;">{{$package->courrier}}</td>
                          <td style="text-align: center;">{{$package->courrier}}</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
                </div>
            </div>
        </div>
        @endforeach
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
