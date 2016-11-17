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
    <div class="right_col" role="main" >
        <h1 style="margin-left: 41%;">Facturas</h1>
  <div id="wizard" class="form_wizard wizard_horizontal" >
      <ul class="wizard_steps anchor" style="margin-left: -8%;">
        <li>
          <a href="#step-1" class="done" isdone="1" rel="1">
            <span class="step_no">1</span>
            <span class="step_descr">
                              Paso 1<br>
                              <small>Datos Generales</small>
                          </span>
          </a>
        </li>
        <li>
          <a href="#step-2" class="done" isdone="1" rel="2">
            <span class="step_no">2</span>
            <span class="step_descr">
                              Paso 2<br>
                              <small>Datos especificos</small>
                          </span>
          </a>
        </li>
         <li>
          <a href="#step-3" class="done" isdone="1" rel="3">
            <span class="step_no">3</span>
            <span class="step_descr">
                              Paso 3<br>
                              <small>Montos</small>
                          </span>
          </a>
        </li>
      </ul>




<form action="{{ url('') }}" method="post" style="height: 100px;">
    <div class="stepContainer form-horizontal form-label-left">
    <div id="step-1" class="content" style="display:block;">
       <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de recibo<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12" >
             <div action=" ">
               <input type="date" name="date" min="1950-01-02" class="form-control col-md-7 col-xs-12"><br>
             </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number_pieces">Número de piezas<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="number_pieces" name="number_pieces" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="declared_value">Valor declarado<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="declared_value" name="declared_value" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Descripción<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="description" class="form-control col-md-7 col-xs-12" name="description" type="text"></textarea>
            </div>
          </div>
      </div>
      <div id="step-2" class="content form-horizontal form-label-left">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="weight ">Peso<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="weight" name="weight " required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="height">Altura<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="height" name="height" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Largo<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="long" class="form-control col-md-7 col-xs-12" name="long" type="text">
            </div>
          </div>
             <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Ancho<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="width" name="width" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
      </div>
      <div id="step-3" class="content form-horizontal form-label-left" style="display: block;">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="insurance">Seguro<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="phone" name="insurance"" required="insurance"" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="freight">Flete<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="freight" name="freight" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tax">Impuesto<span class="required">*</span>
              </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="tax" name="tax" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
   

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="discount">Descuento<span class="required">*</span>
              </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="discount" name="discount" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
   
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="total">Total<span class="required">*</span>
              </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="total" name="total" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>

      </div>
    </div>
  </form>
    </div>
    <!-- /page content -->
        <div class="col-md-2 col-sm-6 col-xs-12" >
              <input type="submit" name="name" value="Registro">
            </div>
    <!-- footer content -->

    <!-- /footer content -->
@endsection