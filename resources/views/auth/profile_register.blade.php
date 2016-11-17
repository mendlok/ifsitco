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
              <select name="ageDay">
                      <option value="1">1</option>
                      <option value="2" selected="selected">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
              </select>
              <select name="ageMonth">
                  <option value="01">Enero</option>
                  <option value="02">Febrero</option>
                  <option value="03">Marzo</option>
                  <option value="04">Abril</option>
                  <option value="05" selected="selected">Mayo</option>
                  <option value="06">Junio</option>
                  <option value="07">Julio</option>
                  <option value="08">Augosto</option>
                  <option value="09">Septiembre</option>
                  <option value="10">Octubre</option>
                  <option value="11">Noviembre</option>
                  <option value="12">Diciembre</option></select>
            <select name="ageYear" id="ageYear">
              <option value="1900">1900</option>
              <option value="1901">1901</option>
              <option value="1902">1902</option>
              <option value="1903">1903</option>
              <option value="1904">1904</option>
              <option value="1905">1905</option>
              <option value="1906">1906</option>
              <option value="1907">1907</option>
              <option value="1908">1908</option>
              <option value="1909">1909</option>
              <option value="1910">1910</option>
              <option value="1911">1911</option>
              <option value="1912">1912</option>
              <option value="1913">1913</option>
              <option value="1914">1914</option>
              <option value="1915">1915</option>
              <option value="1916">1916</option>
              <option value="1917">1917</option>
              <option value="1918">1918</option>
              <option value="1919">1919</option>
              <option value="1920">1920</option>
              <option value="1921">1921</option>
              <option value="1922">1922</option>
              <option value="1923">1923</option>
              <option value="1924">1924</option>
              <option value="1925">1925</option>
              <option value="1926">1926</option>
              <option value="1927">1927</option>
              <option value="1928">1928</option>
              <option value="1929">1929</option>
              <option value="1930">1930</option>
              <option value="1931">1931</option>
              <option value="1932">1932</option>
              <option value="1933">1933</option>
              <option value="1934">1934</option>
              <option value="1935">1935</option>
              <option value="1936">1936</option>
              <option value="1937">1937</option>
              <option value="1938">1938</option>
              <option value="1939">1939</option>
              <option value="1940">1940</option>
              <option value="1941">1941</option>
              <option value="1942">1942</option>
              <option value="1943">1943</option>
              <option value="1944">1944</option>
              <option value="1945">1945</option>
              <option value="1946">1946</option>
              <option value="1947">1947</option>
              <option value="1948">1948</option>
              <option value="1949">1949</option>
              <option value="1950">1950</option>
              <option value="1951">1951</option>
              <option value="1952">1952</option>
              <option value="1953">1953</option>
              <option value="1954">1954</option>
              <option value="1955">1955</option>
              <option value="1956">1956</option>
              <option value="1957">1957</option>
              <option value="1958">1958</option>
              <option value="1959">1959</option>
              <option value="1960">1960</option>
              <option value="1961">1961</option>
              <option value="1962">1962</option>
              <option value="1963">1963</option>
              <option value="1964">1964</option>
              <option value="1965">1965</option>
              <option value="1966">1966</option>
              <option value="1967">1967</option>
              <option value="1968">1968</option>
              <option value="1969">1969</option>
              <option value="1970">1970</option>
              <option value="1971">1971</option>
              <option value="1972">1972</option>
              <option value="1973">1973</option>
              <option value="1974">1974</option>
              <option value="1975">1975</option>
              <option value="1976">1976</option>
              <option value="1977">1977</option>
              <option value="1978">1978</option>
              <option value="1979">1979</option>
              <option value="1980">1980</option>
              <option value="1981">1981</option>
              <option value="1982">1982</option>
              <option value="1983">1983</option>
              <option value="1984">1984</option>
              <option value="1985">1985</option>
              <option value="1986">1986</option>
              <option value="1987">1987</option>
              <option value="1988">1988</option>
              <option value="1989">1989</option>
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998" selected="selected">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
            </select>
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
