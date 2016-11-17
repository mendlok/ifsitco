<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset("css/nprogress.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

</head>

<body class="login">
  <h1>Create User</h1>
  <div id="wizard" class="form_wizard wizard_horizontal">
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





    <div class="stepContainer"><div id="step-1" class="content" style="display: none;">
        <form class="form-horizontal form-label-left">

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

        </form>

      </div>
      <div id="step-2" class="content" style="display: none;">

        <form class="form-horizontal form-label-left">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="first-name" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="middle-name" class="form-control col-md-7 col-xs-12" name="middle-name" type="text">
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
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
            </div>
          </div>

        </form>
      </div><div id="step-3" class="content" style="display: block;">
        <h2 class="StepTitle">Step 3 Content</h2>
        <p>
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
          eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

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
