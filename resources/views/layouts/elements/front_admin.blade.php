<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản lý học sinh</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/css/skin-blue.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/_all-skins.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/jquery-jvectormap.css">
    <![endif]-->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('layouts.elements.top')

    @include('layouts.elements.sidebar_admin')

    @yield('content')


    @include('layouts.elements.control-sidebar')

</div>
<script type="text/javascript" src="{{ asset('layouts/js/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('layouts/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('layouts/js/adminlte.js') }}"></script>
<script type="text/javascript" src="{{ asset('layouts/js/admin.js') }}"></script>
<script type="text/javascript" src="{{ asset('layouts/js/custormer.js') }}"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    @yield('script')
</body>
</html>