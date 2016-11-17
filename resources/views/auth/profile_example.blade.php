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
                    <select name="ageDay">
                      <option value="1">1</option>
                      <option value="2">2</option>
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
										  <option value="01">January</option>
        							<option value="02">February</option>
        							<option value="03">March</option>
        							<option value="04">April</option>
        							<option value="05">May</option>
        							<option value="06">June</option>
        							<option value="07">July</option>
        							<option value="08">August</option>
        							<option value="09">September</option>
        							<option value="10">October</option>
        							<option value="11">November</option>
        							<option value="12">December</option>
						        </select>
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
        							<option value="1998">1998</option>
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
        							<option value="2016" selected="true">2016</option>
        						</select>
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
