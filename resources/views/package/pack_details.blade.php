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


    <div class="col-lg-12">
        <div class="x_panel">

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="x_title">
                    <h2>Remitente<small></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td><b>DATO</b></td>

                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>

            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="x_title">
                    <h2>Destinatario <small></small></h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td><b>DATO</b></td>
                        </tr>
                        <tr>
                            <td><b>DATO</b></td>
                        </tr>
                        <tr>
                            <td><b>DATO</b></td>
                        </tr>
                        <tr>
                            <td><b>DATO</b></td>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>






    <div class="col-lg-12">
        <div class="x_panel">

            <div class="col-md-4 col-sm-6 col-xs-12">

                <div class="x_content">
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
            </div>

            <div class="col-md-8 col-sm-6 col-xs-12">

                <div class="x_content">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td><b>Valor declarado</b></td>
                            <td style="width: 25%">$<span data-bind="text: freight" class="ng-binding"></span>15.000</td>

                        </tr>
                        <tr>
                            <td style="width: 25%"><b>Peso</b></td>
                            <td style="width: 25%"><span data-bind="text: freight" class="ng-binding"> 	0.20LBS /0.09KGS</span></td>

                        </tr>
                        <tr>
                            <td><b>Altura</b></td>
                            <td><span data-bind="text: tax" class="ng-binding"> 	4.00 IN /4.00*2.54 CMS</span></td>

                        </tr>
                        <tr>
                            <td><b>Largo </b></td>
                            <td><span data-bind="text: others" class="ng-binding">6.00 IN /6.00*2.54 CMS</span></td>

                        </tr>
                        <tr>
                            <td><b>Ancho </b></td>
                            <td><span data-bind="text: discount" class="ng-binding"> 	4.00 IN /4.00*2.54 CMS</span></td>

                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-12">
        <div class="x_panel">

             <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="x_title">
                     <h2>Cargos<small></small></h2>
                     <div class="clearfix"></div>
                 </div>
                 <div class="x_content">
                     <table class="table table-hover">
                         <tbody>
                         <tr>
                             <td><b>Seguro</b></td>
                             <td style="width: 25%">$<span data-bind="text: freight" class="ng-binding">0.00</span></td>

                         </tr>
                         <tr>
                             <td style="width: 25%"><b>Flete</b></td>
                             <td style="width: 25%">$<span data-bind="text: freight" class="ng-binding">0.00</span></td>

                         </tr>
                         <tr>
                             <td><b>Impuestos</b></td>
                             <td>$<span data-bind="text: tax" class="ng-binding">6.61</span></td>

                         </tr>
                         <tr>
                             <td><b>Otros</b></td>
                             <td>$<span data-bind="text: others" class="ng-binding">0.00</span></td>

                         </tr>
                         <tr>
                             <td><b>Descuento</b></td>
                             <td>$<span data-bind="text: discount" class="ng-binding">1.00</span></td>

                         </tr>
                         <tr>
                             <td><b>Total</b></td>
                             <td>$<span data-bind="text: total" class="ng-binding">1.32</span></td>

                         </tr>
                         </tbody>
                     </table>

                 </div>
             </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_title">
                    <h2>Cargos adicionales <small></small></h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Valor</th>
                            <th>Detalle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1998/12/3</td>
                            <td>100</td>
                            <td>Juego de consola</td>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
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
                        <td>Cerrado</td>
                        <td>Entregado</td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>

<!-- footer content -->
<footer>
    <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->

<!-- /page content -->
@endsection

