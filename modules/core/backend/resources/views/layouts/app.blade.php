<!DOCTYPE html>
<!--[if IE 8]>
<html lang="{{ app()->getLocale() }}" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="{{ app()->getLocale() }}" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
<head>
    @include('core/backend::partials.header')
</head>
<body class="{{ body_class()->getBodyClass() }}">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{asset('/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        <div style="background-color: #0f6674; margin: 4px; padding: 2px; font-weight: bold; text-align: center;">
            Access <a href="/" target="_blank">home page</a>
        </div>

        <!-- Navbar -->
            @include('core/backend::partials.navbar')
        <!-- /.navbar -->


        <!-- Main Sidebar Container -->
            @include('core/backend::partials.sidebar')
        <!-- /.Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
            @yield('content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('core/backend::partials.footer')
        <!-- /.Main Footer -->
    </div>
        @yield('scripts')
</body>
</html>
