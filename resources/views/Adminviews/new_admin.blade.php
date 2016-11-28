<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IFS! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset("css/nprogress.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

</head>

<body class="login" style="margin-top: 5%;">

        <section class="">
          <form class="form-horizontal form-label-left" novalidate="" action="{{ url('/add_profile') }}" >
              </p>
              <span class="section" style="text-align: center;">Informacion Personal </span>

              <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id">Cedula <span class="required"></span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="id"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="id" placeholder="Cedula" required="required" type="text">
                  </div>
              </div>

              <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required"></span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Nombre" required="required" type="text">
                  </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido <span class="required"></span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="last-name" placeholder="Apellido" name="lastname" required="required" class="form-control col-md-7 col-xs-12" type="text">
                  </div>
              </div>

              <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono <span class="required"></span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="telephone" placeholder="Telefono" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" type="tel">
                  </div>
              </div>

              <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cell">Celular <span class="required"></span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="cell" name="cellphone" placeholder="Celular" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" type="tel">
                  </div>
              </div>

              <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="selec_sex">Sexo <span class="required"></span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control "  name="sex" data-style="btn-success">
                          <option value="m">Masculino</option>
                          <option value="f">Fermenino</option>
                      </select>
                  </div>
              </div>

              <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="selec_sex">Nacionalidad <span class="required"></span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                       <input id="nacionality" name="nacionality" placeholder="Nacionalidad" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" type="tel">
                  </div>
              </div>

              <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Direccion de domicilio <span class="required"></span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea id="textarea" required="required"  placeholder="Direccion de domicilio" name="address" class="form-control col-md-7 col-xs-12"></textarea>
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

              <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Fecha de Nacimiento<span class="required"></span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" name="date" min="1950-01-02" class="form-control col-md-7 col-xs-12"><br>
                  </div>
              </div>


              <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required"></span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="email" name="email" placeholder="Email" required="required" class="form-control col-md-7 col-xs-12" type="email">
                  </div>
              </div>

              <div class="item form-group">
                  <label for="password" class="control-label col-md-3">Contraseña</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="password" placeholder="Contraseña" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required" type="password">
                  </div>
              </div>
              <div class="item form-group">
                  <label for="password" class="control-label col-md-3"></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <label class="checkbox-inline"><input type="checkbox" value="yes">Deseo la entrega de mis paquetes en mi domicilio
                          (Servicio solo para el GAM y se aplica un cargo extra)</label>
                  </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group" style="margin-left: 25%;">
                  <div class="col-md-6 col-md-offset-3">
                      <button type="submit" class="btn btn-primary">Cancelar</button>
                      <button id="send" type="submit" class="btn btn-success">Registrar</button>
                  </div>
              </div>
          </form>
        </section>
    </div>
</div>
</body>
</html>
