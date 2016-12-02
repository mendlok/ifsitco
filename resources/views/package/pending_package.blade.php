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
        <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Facturas</h2>
                  @foreach($profile as $info)
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <section class="content invoice">
                    <!-- title row -->
                    <div class="row">
                      <div class="col-xs-12 invoice-header">
                        <h1>
                            <i class="fa fa-globe"></i> IFS Factura
                            <small class="pull-right">Fecha:{{$date}} </small>
                        </h1>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                      <div class="col-sm-4 invoice-col">
                        De:
                        <address>
                            <strong>International Freight Solutions, Inc.</strong>
                            <br>Zapote frente archivo nacional contiguo a restaurante GARIBALDI.
                            <br>Zapote, San Jose, Costa Rica
                            <br>Teléfono:(506)2253 8287
                            <br>Email: arnaldofallas@ifscr.com
                        </address>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        Para:
                        <address>
                          <strong>{{$info->name}} {{$info->last_name}}</strong>
                          <br>{{ $info->provinces}}, Costa Rica
                          <br>{{$info->canton}}, {{$info->district}}
                          <br>Teléfono: {{$info->phone}}
                          <br>Email: {{$info->email}}
                        </address>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        <b>Factura #{{$info->guide_id}}</b>
                        <br>
                        <br>
                        <b>Tracking:</b> <span class="label label-success">{{$info->tracking}}</span>
                        <br>
                        <b>Fecha de pago:</b> 18/11/2016
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="col-md-12 col-sm-6 col-xs-12" style="margin-bottom: 3.5em">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informacion <small>Paquete pre-alertado</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content col-md-12">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>Fecha de recibido</th>
                          <th>Guia</th>
                          <th>Rastreo</th>
                          <th>Casillero</th>
                          <th>Descripcion del paquete</th>
                          <th>Valor declarado</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">{{$date}}</th>
                          <td>IFS{{$info->packages_ID}}</td>
                          <td>{{$info->tracking}}</td>
                          <td>ITCO{{$info->id}}</td>
                          <td>{{$info->product_description}}</td>
                          <td>${{$info->value}}.00</td>
                        </tr>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

                  @endforeach
                <div class="row">
                  <div class="col-md-3">
                    <p style="text-align: right">Alertado</p>
                  </div>
                  <div class="col-md-3">
                    <p style="text-align: right">Recibido en Miami</p>
                  </div>
                  <div class="col-md-3">
                    <p style="text-align: right">En transito</p>
                  </div>
                  <div class="col-md-3">
                    <p style="text-align: right">Entregado</p>
                  </div>
                </div>
                <div class="container progress">
                <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 25%" id="progress">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick=";"><i class="fa fa-print"></i>     Imprimir Factura</button>
                          <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Hacer pago</button>
                          <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generar PDF</button>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->

<script src="{{asset ('js/PrintArea.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".flip").click(function(){
          $(".panel".slideToggle("slow"));
        });
        $("#imprime").click(function (){
          $("div#myPrintArea").printArea();
        })
      });

    </script>
@endsection
