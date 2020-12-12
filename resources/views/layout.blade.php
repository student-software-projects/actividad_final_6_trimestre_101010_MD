<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS-->
    <link rel="stylesheet" href="{{asset('content/bootstrap/bootstrap.min.css')}}">

    <!--Scripts -->
    <script src="{{asset('plugins/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('plugins/popper.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap.bundle.min.js')}}"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Sofia');
        body {
            padding-top: 40px;
            padding-bottom: 60px;
            font-family: 'Times New Roman';
            background: url({{asset('content/imagenes/FondoMain.jpg')}});
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

    <title>@yield('titulo') | TRANSPORTES ACME S.A.</title>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark m-3">
    <a class="navbar-brand " href="{{route('main')}}">TRANSPORTES ACME S.A.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-3">
            <li class="nav-item">
                <p style="font-size:x-large">
                    <a class="nav-link text-dark"  href={{route('vehicle.index')}}>Vehiculos/ </a>
                </p>
            </li>
            <li class="nav-item">
                <p style="font-size:x-large">
                    <a class="nav-link text-dark" href="{{route('person.index')}}">Propietarios/Conductores </a>
                </p>
            </li>
            <li class="nav-item">
                <p style="font-size:x-large">
                    <a class="nav-link text-dark" href="{{route('informes')}}">/Informes </a>
                </p>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid overflow-auto" style="padding-top: 40px; padding-bottom: 20px">
    @yield('content')
</div>
<footer style="text-align: center; margin-top: 20px; color: white;">
   <P>
       <h4> <span>By ADSI SENA--2020</span></h4>
   </P>
</footer>
</body>
</html>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
