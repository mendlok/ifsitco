<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><i class="fa fa-paw"></i> <span>IFS</span></a>
        </div>
        
        <div class="clearfix"></div>
        
        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Avatar of {{ Auth::user()->name }}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        
        <br />
        
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side  main_menu">
            <div class="menu_section">
                <h3>Menu lateral</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-archive"></i> Mis paquetes<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/mypackages')}}">Mis paquetes</a></li>
                            <li><a href="{{url('/mypackages/myalerts')}}">Paquetes sin reclamar</a></li>
                            <li><a href="{{url('/mypackages/holdInMiami')}}">Paquetes Alertados</a></li>
                            <li><a href="{{url('/mypackages/inTransit')}}">Paquetes en tránsito</a></li>
                            <li><a href="{{url('/mypackages/delivered')}}">Paquetes entregados</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="fa fa-user"></i>Usuarios<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Nuevo administrador</a></li>
                            <li><a href="#">Ver todos los administradores</a></li>
                            <li><a href="#">Ver todos los clientes</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i>Volver</a>
                       
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
        
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>