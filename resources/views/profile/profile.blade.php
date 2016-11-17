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
                <h3>Perfil de usuario</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ultimos reportes</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                      <div class="profile_img">

                        <!-- end of image cropping -->
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{asset ('images/man.png') }}"
                          @foreach($profile as $profiles)
                            @if($profiles->sex = "m")
                            @endif
                          @endforeach
                          alt="Avatar" title="Change the avatar" style="height: 208px;">

                          <!-- Cropping modal -->
                          <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                                  <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type="button">×</button>
                                    <h4 class="modal-title" id="avatar-modal-label">Cambiar Avatar</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="avatar-body">

                                      <!-- Upload image and data -->
                                      <div class="avatar-upload">
                                        <input class="avatar-src" name="avatar_src" type="hidden">
                                        <input class="avatar-data" name="avatar_data" type="hidden">
                                        <label for="avatarInput">Local</label>
                                        <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                      </div>

                                      <!-- Crop and preview -->
                                      <div class="row">
                                        <div class="col-md-9">
                                          <div class="avatar-wrapper"></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="avatar-preview preview-lg"></div>
                                          <div class="avatar-preview preview-md"></div>
                                          <div class="avatar-preview preview-sm"></div>
                                        </div>
                                      </div>

                                      <div class="row avatar-btns">
                                        <div class="col-md-9">
                                          <div class="btn-group">
                                            <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                                          </div>
                                          <div class="btn-group">
                                            <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <div class="modal-footer">
                                                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                  </div> -->
                                </form>
                              </div>
                            </div>
                          </div>
                          <!-- /.modal -->

                          <!-- Loading state -->
                          <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                        </div>
                        <!-- end of image cropping -->

                      </div>
                      @foreach ($profile as $profiles)
                      <h3>
                        {{$profiles->name}}
                        {{$profiles->last_name}}
                        </h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"> {{$profiles->district}}, {{$profiles->provinces}},Costa Rica</i>
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon">{{$profiles->address}}</i>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon">{{$profiles->cellphone}}</i>
                          <a href="#" target="_blank"></a>
                        </li>
                      </ul>

                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br>
                      @endforeach


                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Actividad Reciente</h2>
                        </div>
                        <div class="col-md-6">
                          <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>October 18, 2016 - November 16, 2016</span> <b class="caret"></b>
                          </div>
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      <div id="graph_bar" style="width: 100%; height: 280px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="280" version="1.1" width="755" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.25px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël @@VERSION</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="33.5" y="200.36860278" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,200.36860278H730" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="156.52645208500002" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.010827085000017" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,156.52645208500002H730" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="112.68430139" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.012426390000002" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,112.68430139H730" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="68.84215069500002" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.014025695000015" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,68.84215069500002H730" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">400</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,25H730" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="695.8" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,159.0433,721.1755)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Oct</tspan></text><text x="627.4" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,123.8402,662.8)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Sep</tspan></text><text x="559" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,89.1448,603.572)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Aug</tspan></text><text x="490.6" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,56.9417,541.7324)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jul</tspan></text><text x="422.2" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,21.7386,484.2229)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jun</tspan></text><text x="353.8" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-13.2067,426.2939)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">May</tspan></text><text x="285.4" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-46.9098,366.1863)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Apr</tspan></text><text x="217" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-81.1052,307.8243)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mar</tspan></text><text x="148.6" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-115.3083,247.7167)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Feb</tspan></text><text x="80.2" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-149.2614,188.0422)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jan</tspan></text><rect x="54.55" y="165.294882224" width="24.150000000000002" height="35.07372055600001" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="122.95" y="145.56591441125" width="24.150000000000002" height="54.80268836875001" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="191.35000000000002" y="123.2064175568" width="24.150000000000002" height="77.1621852232" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="259.75" y="102.16218522320001" width="24.150000000000002" height="98.20641755679999" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="328.15000000000003" y="84.18690343825001" width="24.150000000000002" height="116.18169934174999" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="396.55" y="62.7042495977" width="24.150000000000002" height="137.6643531823" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="464.95000000000005" y="48.23633986835" width="24.150000000000002" height="152.13226291165" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="533.35" y="74.54163028535001" width="24.150000000000002" height="125.82697249465" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="601.75" y="95.14744111200001" width="24.150000000000002" height="105.221161668" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="670.15" y="107.86166481355001" width="24.150000000000002" height="92.50693796645" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="left: 157.5px; top: 102px; display: none;"><div class="morris-hover-row-label">Mar</div><div class="morris-hover-point" style="color: #26B99A">
  Hours worked:
  176
</div><div class="morris-hover-point" style="color: #34495E">
  SORN:
  -
</div></div></div>
                      <!-- end of user-activity-graph -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Alertas</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Mis paquetes</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Perfil</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>
                                <img src="image/user.png" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info">24</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Llegada Miami</h4>
                                  <blockquote class="message">Su paquete ha llegado a Miami.</blockquote>
                                  <br>
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-paperclip"></i> Hace 5 dias</a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src="image/user.png" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-error">21</h3>
                                  <p class="month">May</p>
                                </div>
                               <div class="message_wrapper">
                                  <h4 class="heading"></h4>
                                  <blockquote class="message">Su paquete ha llegado a Costa Rica</blockquote>
                                  <br>
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-paperclip"></i> Hace 2 dias</a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src="image/user.png" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info">24</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Paquete entregado</h4>
                                  <blockquote class="message">Su paquete ha sido entregado</blockquote>
                                  <br>
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-paperclip"></i> Hace 6 horas </a>
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src="image/user.png" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-error">21</h3>
                                  <p class="month">May</p>
                                </div>
                                  <div class="message_wrapper">
                                  <h4 class="heading">Paquete Nuevo</h4>
                                  <blockquote class="message">Has alertado un nuevo paquete, este llegara a mas tardar en 8 dias a Costa Rica, Gracias por preferirnos IFS desea lo mejor para usted y su compañia.</blockquote>
                                  <br>
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-paperclip"></i> Hace 1 hora </a>
                                  </p>
                                </div>
                              </li>

                            </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
            <div class="container menu" style="background-color: white;">
            <div class="rows" style="margin:2%;">
                 <div class="col-lg-2 col-sm-6 col-xs-12 " >
                <img src="{{ asset('images/foto4.png') }}" class="img-responsive fotos">
                <br>
                    <span class="label label-primary" style="font-size: 1em;margin-left: 7%;"><a href=" " style="color:white;">Ver producto</a></span>
                </div>
                 <div class="col-md-10 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mis paquetes</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>Courier</th>
                          <th>Tracking</th>
                          <th>Descrición</th>
                          <th>Valor</th>
                          <th>Estado</th>
                          <th>Factura interna</th>
                        </tr>
                      </thead>
                      <tbody >
                        <tr>
                         <th style="text-align: center;">44</th>
                          <th style="text-align: center;">4</th>
                          <td style="text-align: center;">Nitendo 2Ds</td>
                          <td style="text-align: center;">120000</td>
                          <td style="text-align: center;">Entregado</td>
                          <td style="text-align: center;">122</td>
                        </tr>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
        </div>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                             <div class="container menu" style="background-color: white;">
            <div class="rows" style="margin:2%;">
                 <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Perfil</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Apelido</th>
                          <th>Fecha Nacimiento</th>
                          <th>Sexo</th>
                          <th>Teléfono</th>
                          <th>Celular</th>
                          <th>Nacionalidad</th>
                        </tr>
                      </thead>
                      <tbody >
                        <tr>
                         @foreach($profile as $profiles)
                          <th style="text-align: center;">{{$profiles->name}}</th>
                          <th style="text-align: center;">{{$profiles->last_name}}</th>
                          <td style="text-align: center;">{{$profiles->birth_date}}</td>
                          <td style="text-align: center;">{{$profiles->sex}}</td>
                          <td style="text-align: center;">{{$profiles->phone}}</td>
                          <td style="text-align: center;">{{$profiles->cellphone}}</td>
                          <td style="text-align: center;">{{$profiles->nacionality}}</td>
                         @endforeach
                        </tr>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
        </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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

    <script type="text/javascript">
      $(document).ready(function(){
        $(".flip").click(function(){
          $(".panel".slideToggle("slow"));
        });
      });

    </script>
@endsection
