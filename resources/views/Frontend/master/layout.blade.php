<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ url('css/half-slider.css') }}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ url('css/project.css') }}" rel="stylesheet" />
    <link href="{{ url('css/jquery-ui.css') }}" rel="stylesheet" />

</head>

<body onload="process()">
@section('sidebar')
@include('Frontend.includes.navbar')
@show
<div class="container">
    @yield('content')
</div>



</body>
@include('Frontend.includes.footer')
</html>
