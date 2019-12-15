<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ek Price</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/uikit.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/themify-icons.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    @yield('css')
</head>
<body>

    @yield('content')
    @include('layouts.partials.footer')

    <script src="{{ asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/uikit.min.js')}}"></script>
    <script src="{{ asset('js/uikit-icons.min.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>
</body>

</html>