<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>@yield('title')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <!-- Title bar -->
    <div class="title-bar">
        <div class="title-bar-brand">Sistem Pakar</div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{url('/')}}"class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{url('konsul')}}"class="{{ request()->is('konsul') ? 'active' : '' }}">Konsultasi</a>
        
    </div>

    <!-- Main content -->
    <div class="content clearfix">
        @yield('content')
    </div>

</body>
</html>
