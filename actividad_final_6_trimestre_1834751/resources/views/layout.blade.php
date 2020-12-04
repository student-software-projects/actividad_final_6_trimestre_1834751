<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS y Scripts -->
    <link rel="stylesheet" href="{{asset('contenido/bootstrap/bootstrap.min.css')}}">
    <script src="{{asset('plugins/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('plugins/popper.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap.bundle.min.js')}}"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            padding-top: 10px;
            padding-bottom: 20px;
            font-family: 'Piazzolla';
            background-color: black;
        }
    </style>

    <title>@yield('titulo') | ACME S.A</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark m-3">
    <a class="navbar-brand " href="{{route('home')}}">ACME S.A</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-3">
            <li class="nav-item">
                <a class="nav-link" href="#">[Vehiculos]</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('persona.index')}}">[Propietarios/Conductores]</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid overflow-auto" style="padding-top: 40px; padding-bottom: 20px">
    @yield('contenido')
</div>
<footer style="text-align: center; margin-top: 20px; color: white;">
    <span>2020 - Creado por Shihan</span>
</footer>
</body>
</html>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
