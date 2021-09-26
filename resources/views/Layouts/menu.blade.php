<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    @yield('styles')
    <link href="{{ URL::asset('css/menu.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    @yield('scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark ">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse contenedor-menu" id="navbarSupportedContent">
                <div class="menu-inicio">
                    <ul class="nav justify-content-center">
                        <li class="nav-item ">
                            <a class="nav-link btn-inicio" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-inicio" href="#">Más</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link btn-inicio" href="#">Menos</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-sesion">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link btn-sesion-r" href="/registrarse">Registrate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-sesion-i" href="/iniciar-sesion">Iniciar sesion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('body')

    <footer>
    </footer>
</body>

</html>
