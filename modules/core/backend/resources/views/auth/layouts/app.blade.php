<!DOCTYPE html>
<!--[if IE 8]>
<html lang="{{ app()->getLocale() }}" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="{{ app()->getLocale() }}" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
<head>
    @include('core/backend::auth.partials.header')
</head>
<body class="{{ body_class()->getBodyClass() }}">

@yield('content')

@include('core/backend::auth.partials.footer')

</body>
</html>
