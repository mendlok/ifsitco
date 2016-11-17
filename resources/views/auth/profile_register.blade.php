<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro</title>

    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset("css/nprogress.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

</head>

<body class="login" style="margin-top:6%;">
  <h1 style="margin-left: 41%;">Registro</h1>
  <div id="wizard" class="form_wizard wizard_horizontal" >
      <ul class="wizard_steps anchor">
        <li>
          <a href="#step-1" class="done" isdone="1" rel="1">
            <span class="step_no">1</span>
            <span class="step_descr">
                              Paso 1<br>
                              <small>Email y contraseña</small>
                          </span>
          </a>
        </li>
        <li>
          <a href="#step-2" class="done" isdone="1" rel="2">
            <span class="step_no">2</span>
            <span class="step_descr">
                              Paso 2<br>
                              <small>Datos personales</small>
                          </span>
          </a>
        </li>
        <li>
          <a href="#step-3" class="selected" isdone="1" rel="3">
            <span class="step_no">3</span>
            <span class="step_descr">
                              Paso 3<br>
                              <small>Información de Contacto</small>
                          </span>
          </a>
        </li>
      </ul>




<form action="{{ url('/add_profile') }}" method="post">
    <div class="stepContainer form-horizontal form-label-left"><div id="step-1" class="content" style="display: none;">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_confirmation">Confirma tu email<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="email_confirmation" name="email_confirmation" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Contraseña<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="password_confirmation" class="form-control col-md-7 col-xs-12" name="password" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirma tu contraseña<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
            </div>
          </div>

      </div>
      <div id="step-2" class="content form-horizontal form-label-left" style="display: none;">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="first-name" name="name" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="last-name" name="lastname" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Idetificación<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="middle-name" class="form-control col-md-7 col-xs-12" name="dni" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Genero</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div id="gender" class="btn-group" data-toggle="buttons">
                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input name="gender" value="male" type="radio"> &nbsp;Hombre&nbsp;
                </label>
                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                  <input name="gender" value="female" type="radio">Mujer
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top: 0.5em;">
               <div action=" ">
               <input type="date" name="date" min="1950-01-02" class="form-control col-md-7 col-xs-12"><br>
             </div>
            </div>
          </div>
      </div>
      <div id="step-3" class="content form-horizontal form-label-left" style="display: block;">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Telefono<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="phone" name="phone" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cellphone">Celular<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="cellphone" name="cellphone" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ubicación<span class="required">*</span>
            </label>
            <div class="col-md-2 col-sm-6 col-xs-12">
              <input id="province" name="province" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Provincia">
            </div>
             <div class="col-md-2 col-sm-6 col-xs-12">
              <input id="canton" name="canton" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Cantón">
            </div>
             <div class="col-md-2 col-sm-6 col-xs-12">
              <input id="district" name="district" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Distrito">
            </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"  for="address">Dirección Exacta<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="address" class="form-control col-md-7 col-xs-12" name="address" type="text"></textarea>
            </div>
          </div>
      </div>
      <input type="submit" name="name" value="Registro">
  </form>
<script src="https://colorlib.com/polygon/vendors/jquery/dist/jquery.min.js" charset="utf-8"></script>
<script src="https://colorlib.com/polygon/vendors/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
<script src="https://colorlib.com/polygon/vendors/fastclick/lib/fastclick.js" charset="utf-8"></script>
<script src="https://colorlib.com/polygon/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js" charset="utf-8"></script>
<script src="https://colorlib.com/polygon/build/js/custom.min.js" charset="utf-8"></script>
<script src="https://colorlib.com/polygon/vendors/nprogress/nprogress.js" charset="utf-8"></script>

<script type="text/javascript">
    $(document).ready(function() {
      $('#wizard').smartWizard();
      $('#wizard_verticle').smartWizard({
        transitionEffect: 'slide'
      });
      $('.buttonNext').addClass('btn btn-success');
      $('.buttonPrevious').addClass('btn btn-primary');
      $('.buttonFinish').addClass('btn btn-default');

    });
</script>

</body>
</html>
