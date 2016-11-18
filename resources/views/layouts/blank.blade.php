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

    <link href="{{ asset("css/styleifs.css") }}" rel="stylesheet">

    <link href="{{ asset("css/AdminLTE.css") }}" rel="stylesheet">

        @stack('stylesheets')

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                @include('includes/sidebar')

                @include('includes/topbar')

                @yield('main_container')



            </div>
        </div>

        <!-- jQuery -->
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
        @stack('scripts')
  <footer>
        <div class="pull-right" style="">
            <p style="text-align: center;">Desarrollado por ITCO Costa Rica.<a href="https://colorlib.com">Todos los derechos reservados</a></p>
        </div>
        <div class="clearfix"></div>
    </footer>
    </body>
</html>
