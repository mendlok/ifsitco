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
        <h1>En transito</h1>
        @if($packages->isEmpty() === true)
          <h2 style="text-align:center; font-size:2.5em">No hay paquetes en transito</h2>
        @else
        @foreach($packages as $package)
        <div class="container menu" style="background-color: white;border-top: solid;">
            <div class="rows" style="margin:2%;">
                <div class="col-lg-12 col-sm-6 col-xs-12" >
                 <div class="col-lg-2 col-sm-6 col-xs-12 " style="margin-bottom: 5%;">
                <img src="{{ asset('images/box.png') }}" class="img-responsive fotos" style="height: 125px;">
                <br>
                  <a class="btn btn-primary acomodo-but" style="margin-left: 10%;" href="{{ url('/mypackages/more-info/'.$package->tracking) }}">Ver producto</a>
                </div>
                 <div class="col-md-10 col-sm-6 col-xs-12">
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

                    <table class="col-md-12" >
                      <thead class="centered-head" >
                        <tr>
                          <th class="col-md-2">Courier</th>
                          <th class="col-md-2">Tracking</th>
                          <th class="col-md-2" >Descrición</th>
                          <th class="col-md-2">Valor</th>
                          <th class="col-md-2">Estado</th>
                          <th class="col-md-2">Factura interna</th>
                        </tr>
                      </thead>
                      <tbody class="centered-items">
                      <tr>
                         <td class="col-md-2">{{$package->courrier}}</td>
                          <td class="col-md-2">{{$package->tracking}}</td>
                          <td class="col-md-2">{{$package->product_description}}</td>
                          <td class="col-md-2"><img src="{{ asset('images/dollar.png') }}"style="height: 15px;">{{$package->value}}.00</td>
                          @if($package->status === "pending")
                            <td class="col-md-2"><span class="label label-danger">Alertado</span></td>
                          @elseif($package->status === "transit")
                            <td class="col-md-2"><span class="label label-warning">En transito</span></td>
                          @else
                            <td class="col-md-2"><span class="label label-success">Entregado</span></td>
                          @endif
                          <td class="col-md-2">{{$package->courrier}}</td>
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
        {{ $packages->links()}}
        @endif
    </div>
    <!-- /page content -->

    <!-- footer content -->

    <!-- /footer content -->
@endsection
