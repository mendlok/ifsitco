@extends('layouts.blank')

@push('stylesheets')
        <!-- iCheck -->
<link href="{{ asset("css/green.css") }}" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="{{ asset("css/bpb.css") }}" rel="stylesheet">
<!-- jVectorMap -->
<link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>
@endpush

@section('main_container')

        <!-- page content -->
<div class="right_col" role="main">
    <div class="col-lg-12">

        <form class="form-horizontal form-label-left" novalidate="">
            </p>
            <span class="section">Información Personal </span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id">Cedula <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="id"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="txt_id" placeholder="Cedula" required="required" type="text">
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="txt_name" placeholder="Nombre" required="required" type="text">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="last-name" placeholder="Apellido" name="txt_lastName" required="required" class="form-control col-md-7 col-xs-12" type="text">
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="telephone" placeholder="Telefono" name="txt_phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" type="tel">
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cell">Celular <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="cell" name="txt_cell" placeholder="Celular" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" type="tel">
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="selec_sex">Sexo <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control "  name="selec_sex" data-style="btn-success">
                        <option value="">Masculino</option>
                        <option value="">Fermenino</option>
                    </select>
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Direccion de domicilio <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" required="required"  placeholder="Direccion de domicilio" name="textarea_residence" class="form-control col-md-7 col-xs-12"></textarea>
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="email" name="txt_email" placeholder="Email" required="required" class="form-control col-md-7 col-xs-12" type="email">
                </div>
            </div>

            <div class="item form-group">
                <label for="password" class="control-label col-md-3">contraseña</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="password" placeholder="contraseña" name="txt_password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required" type="password">
                </div>
            </div>
            <div class="item form-group">
                <label for="password" class="control-label col-md-3"></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <label class="checkbox-inline"><input type="checkbox" value="">Deseo la entrega de mis paquetes en mi domicilio
                        (Servicio sólo para el GAM y se aplica un cargo extra)</label>
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
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

<scritp src="{{ asset("js/bootstrap.min.js") }}"></scritp>
<scritp src="{{ asset("js/gentelella.min.js") }}"></scritp>
<scritp src="{{ asset("js/jquery.min.js") }}"></scritp>
<scritp src="{{ asset("js/wizard.js") }}"></scritp>
<scritp src="{{ asset("js/nprogress.js") }}"></scritp>
<scritp src="{{ asset("js/validator.min.js") }}"></scritp>


@endsection