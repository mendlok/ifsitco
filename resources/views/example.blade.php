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
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
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
                              <small class="pull-right">Fecha: 18/11/2016</small>
                          </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          De:
                          <address>
                              <strong>Iron Admin, Inc.</strong>
                              <br>795 Freedom Ave, Suite 600
                              <br>New York, CA 94107
                              <br>Teléfono: 1 (804) 123-9876
                              <br>Email: ironadmin.com
                          </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          Para:
                          <address>
                                    <strong>Johnny Rojas</strong>
                                    <br>San Jose , Costa Rica
                                    <br>Desamparados, Aserri
                                    <br>Teléfono: 22302230
                                    <br>Email: johnnywow98@gmail.com
                          </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Factura #007612</b>
                          <br>
                          <br>
                          <b>Tracking:</b> 4F3S8J
                          <br>
                          <b>Fecha de pago:</b> 18/11/2016
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row col-md-6">
                        <div class="col-xs-12 table">
                             <table class="table table-hover">
                        <tbody  >
                        <tr>
                            <td><b>Fecha de recibido</b></td>
                            <td style="width: 25%"><span data-bind="text: freight" class="ng-binding"></span>1998/9/5</td>

                        </tr>
                        <tr>
                            <td style="width: 25%"><b>Guia</b></td>
                            <td style="width: 25%"><span data-bind="text: freight" class="ng-binding">DES1199364550</span></td>

                        </tr>
                        <tr>
                            <td><b>Rastreo</b></td>
                            <td><span data-bind="text: tax" class="ng-binding">LS033606711CN</span></td>

                        </tr>
                        <tr>
                            <td><b>Casillero</b></td>
                            <td><span data-bind="text: others" class="ng-binding">CR129X19528O</span></td>

                        </tr>
                        <tr>
                            <td><b>Piezas</b></td>
                            <td><span data-bind="text: discount" class="ng-binding">500</span></td>

                        </tr>
                        <tr>
                            <td><b>Descripcion del paquete</b></td>
                            <td><span data-bind="text: total" class="ng-binding">Juego de consola</span></td>

                        </tr>
                        </tbody>
                    </table>

                        </div>

                        <!-- /.col -->
                      </div>

                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-md-6">
                             <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td><b>Valor declarado</b></td>
                            <td style="width: 25%">$<span data-bind="text: freight" class="ng-binding"></span>15.000</td>

                        </tr>
                        <tr>
                            <td style="width: 25%"><b>Peso</b></td>
                            <td style="width: 25%"><span data-bind="text: freight" class="ng-binding">  0.20LBS /0.09KGS</span></td>

                        </tr>
                        <tr>
                            <td><b>Altura</b></td>
                            <td><span data-bind="text: tax" class="ng-binding">   4.00 IN /4.00*2.54 CMS</span></td>

                        </tr>
                        <tr>
                            <td><b>Largo </b></td>
                            <td><span data-bind="text: others" class="ng-binding">6.00 IN /6.00*2.54 CMS</span></td>

                        </tr>
                        <tr>
                            <td><b>Ancho </b></td>
                            <td><span data-bind="text: discount" class="ng-binding">  4.00 IN /4.00*2.54 CMS</span></td>

                        </tr>
                        </tbody>
                    </table>
                  </div>
                  
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i>     Imprimir Factura</button>
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
   

    <script type="text/javascript">
      $(document).ready(function(){
        $(".flip").click(function(){
          $(".panel".slideToggle("slow"));
        });
      });

    </script>
@endsection
