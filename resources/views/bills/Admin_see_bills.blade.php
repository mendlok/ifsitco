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
              <form action="{{url('/saveBill')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                            <small class="pull-right">Fecha: {{$date}}</small>
                        </h1>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                      <div class="col-sm-4 invoice-col">
                        De:
                        <address>
                          <address>
                              <strong>International Freight Solutions, Inc.</strong>
                              <br>Zapote frente archivo nacional contiguo a restaurante GARIBALDI.
                              <br>Zapote, San Jose, Costa Rica
                              <br>Teléfono:(506)2253 8287
                              <br>Email: arnaldofallas@ifscr.com
                          </address>
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
                          <td>
                            <select class="selectpicker" name="number_piecess" class="btn-primary">
                                <option value="null">Seleccione una opción</option>
                                <option value="1" selected="op1">1 pieza</option>
                                <option value="2" selected="op2">2 piezas</option>
                                <option value="3" selected="op3">3 piezas</option>
                                <option value="4" selected="op4">4 piezas</option>
                                <option value="5" selected="op5">+5 piezas</option>
                            </select>
                          </td>

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
                          <td style="width: 25%">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                              <input type="text" class="form-control" name="declared_value" value="{{$info->value}}.00" readonly="readonly">
                            </div>
                          </td>

                      </tr>
                      <tr>
                          <td style="width: 25%"><b>Peso</b></td>
                          <td style="width: 25%">

                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
                            <input type="text" class="form-control" name="weigth" value="{{$info->weigth}}">
                          </div>
                      </tr>
                      <tr>
                          <td><b>Altura</b></td>
                          <td>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-arrows-v"></i></span>
                            <input type="text" class="form-control" name="height" value="{{$info->heigth}}">
                          </div>
                          </td>

                      </tr>
                      <tr>
                          <td><b>Largo </b></td>
                          <td>
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-arrows-v"></i></span>
                              <input type="text" class="form-control" name="long" value="{{$info->long}}">
                          </div>
                          </td>

                      </tr>
                      <tr>
                          <td><b>Ancho </b></td>
                          <td>
                              <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>
                              <input type="text" class="form-control" name="width" value="{{$info->width}}">
                          </div>
                          </td>

                      </tr>
                      <tr>
                          <td><b>Estado</b></td>
                          <td>
                            <select class="stade">
                                <option value="null" selected="">Seleccione un estado</option>
                                <option value="alert" selected="true">Alertado</option>
                                <option value="intransit" selected="false">En tránsito</option>
                                <option value="delivered" selected="false">Entregado</option>
                            </select>
                          </td>
                      </tr>
                      </tbody>
                  </table>
                </div>



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
                        <td>
                        <select class="selectpicker" name="number_pieces" class="btn-primary">
                                <option value="null">Seleccione una opción</option>
                                <option value="Reten">Retenido</option>
                                <option value="check_contend">Revisión de contenido</option>
                                <option value="three_pieces" >Localizado en bodega(MIA)</option>
                                <option value="fourth_pieces" >Recibido en MIA</option>
                                <option value="agency_bill" >Factura subida por agencia</option>
                                <option value="autorized" >TC autorizado</option>
                                <option value="packed" >Empacado</option>
                                <option value="dispatched" >Despachado</option>
                            </select></td>
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
                                  <td>
                                      <div class="input-group">
                                          <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                          <input type="number" class="form-control" name="tax" min="1" max="100" value="1">
                                      </div>
                            </td>
                                </tr>
                                <tr>
                                  <th>Flete:</th>
                                  <td>
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                      <input type="text" class="form-control" name="freight" value="">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <th>Descuento</th>
                                  <td>
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input type="text" class="form-control" name="discount" value="">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <th>Sub Total:</th>
                                  <td>
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input type="text" class="form-control"  name="subtotal" value="0">
                                      </div>
                                </td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input type="text" class="form-control" id="total" name="total" value="{{$info->value}}">
                                      </div>
                                </td>
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
                          <button  type="imput" class="btn btn-warning pull-right" name="save" style="margin-right: 5px;"><i class="fa fa-download"></i>  Guardar Cambios</button>
                        </div>
                      </div>
                    </section>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    @endforeach
    <!-- /page content -->

    <!-- footer content -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".flip").click(function(){
          $(".panel".slideToggle("slow"));
        });
        var total = $('input:text[name=total]').val();
        var tax = $('input:text[name=tax]').val();
        var subtotal = tax * total / 100;
        alert(tax);
        $('input:text[name=subtotal]').val(200);

      });

    </script>
@endsection
