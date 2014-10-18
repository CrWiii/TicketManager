<!DOCTYPE html>
<html lang="es-ES">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    @include('includes.head')
</head>
<body>
<!-- Start #header -->
    @include('includes.header')
<!-- End #header -->
<!-- Start #sidebar -->
    @include('includes.sidebar')
<!-- End #sidebar -->
<!-- Start #right-sidebar -->
    @include('includes.rightSidebar')
<!-- End #right-sidebar -->
<!-- Start #content -->

    @yield('content')

<!-- End #content -->
<!-- Javascripts -->
<!-- Load pace first -->
    @include('includes.javascripts')

    @yield('scripts')

</body>

</html>