<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Avatar of {{ Auth::user()->name }}">
                        {{ Auth::user()->name }}
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="{{ url('/myprofile') }}"> Perfil</a></li>
                        <li>
                            <a href="javascript:;">
                                <span class="badge bg-red pull-right"></span>
                                <span>Ajustes</span>
                            </a>
                        </li>
                        <li><a href="javascript:;">Ayuda</a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                    </ul>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                            <a>
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">Hace 3 días.</span>
                        </span>
                                <span class="message">
                          Su paquete ha llegado a Florida.
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">Hace 2 días</span>
                        </span>
                                <span class="message">
                          Su paquete ha salido hacia Costa Rica.
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">Hace 1 día</span>
                        </span>
                                <span class="message">
                          Su paquete ha llegado a Costa Rica.
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">Hace 5 horas</span>
                        </span>
                                <span class="message">
                          Su paquete ha sido entregado.
                        </span>
                            </a>
                        </li>
                        <li>
                            <div class="text-center">
                                <a>
                                    <strong>Ver todas las alertas</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <form action="">
                 <li role="presentation" >
                        <div class="input-group">
                               <button type="submit" class="btn btn-default ">#Buscar</button>
                          </div> 
                </li>
                <li role="presentation" >
                        <div class="input-group">
                              
                               <input type="text" class="form-control" placeholder="#Buscar" aria-describedby="basic-addon1">  
                        </div>
                </li>
                </form>
                 
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
