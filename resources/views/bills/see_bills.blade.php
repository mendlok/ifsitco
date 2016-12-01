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
                          <td style="width: 25%"><span data-bind="text: freight" class="ng-binding">IFS{{$info->packages_ID}}</span></td>

                      </tr>
                      <tr>
                          <td><b>Rastreo</b></td>
                          <td><span data-bind="text: tax" class="ng-binding">{{$info->tracking}}</span></td>

                      </tr>
                      <tr>
                          <td><b>Casillero</b></td>
                          <td><span data-bind="text: others" class="ng-binding">ITCO{{$info->id}}</span></td>

                      </tr>
                      <tr>
                          <td><b>Piezas</b></td>
                          <td><span data-bind="text: discount" class="ng-binding">{{$info->number_pieces}}</span></td>

                      </tr>
                      <tr>
                          <td><b>Descripcion del paquete</b></td>
                          <td><span data-bind="text: total" class="ng-binding">{{$info->product_description}}</span></td>

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
                          <td style="width: 25%">$<span data-bind="text: freight" class="ng-binding"></span>{{$info->value}}.00</td>

                      </tr>
                      <tr>
                          <td style="width: 25%"><b>Peso</b></td>
                          <td style="width: 25%"><span data-bind="text: freight" class="ng-binding">{{$info->weigth}} KG</span></td>

                      </tr>
                      <tr>
                          <td><b>Altura</b></td>
                          <td><span data-bind="text: tax" class="ng-binding">   {{$info->heigth}} CM</span></td>

                      </tr>
                      <tr>
                          <td><b>Largo </b></td>
                          <td><span data-bind="text: others" class="ng-binding">{{$info->long}} CM</span></td>

                      </tr>
                      <tr>
                          <td><b>Ancho </b></td>
                          <td><span data-bind="text: discount" class="ng-binding">{{$info->width}} CM</span></td>

                      </tr>
                      <tr>
                          <td><b>Estado</b></td>
                          <td><span data-bind="text: discount" class="ng-binding">{{$info->status}}</span></td>

                      </tr>
                      </tbody>
                  </table>
                </div>
                  @endforeach
                      <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Estatus</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Estatus</th>
                        <th>Comentarios</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1998/1/1</td>
                        <td>Cerrado</td>
                        <td>Entregado</td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
                  <div class="col-md-12">
                  <div class="col-xs-6">
                           <div class="col-xs-12">
                          <p class="lead">Metodos de pago:</p>
                          <img src="{{ asset('images/visa.png') }}" alt="Visa">
                          <img src="{{ asset('images/mastercard.png') }}" alt="Mastercard">
                          <img src="{{ asset('images/american-express.png') }}" alt="American Express">
                          <img src="{{ asset('images/paypal.png') }}" alt="Paypal">
                          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Esta factura puede ser impresa en caso de susitar algun tipo de inconveniente.
                          </p>
                        </div>
                        </div>
                      <div class="col-xs-6">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Seguro:</th>
                                  <td>INS</td>
                                </tr>
                                <tr>
                                  <th>Impuesto</th>
                                  <td>9%</td>
                                </tr>
                                <tr>
                                  <th>Flete:</th>
                                  <td>$15.80</td>
                                </tr>
                                <tr>
                                  <th>Descuento</th>
                                  <td>$0</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>$80</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                  </div>


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
