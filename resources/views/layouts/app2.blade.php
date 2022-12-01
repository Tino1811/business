<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa - @yield('title')</title>
    <!-- Bootstrap CSS Link --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Archive CSS Link --> 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!------------Header------------>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-2 bg-body rounded">
            <div class="container-fluid">
                <a class="navbar-brand col-md-3 col-lg-4 fw-bolder fs-4 text-uppercase" href="#">
                    <img class="me-3" src="{{ asset('img/user.svg') }}" alt="" width="58" height="58">
                    Empresa
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Cuando le usuario este autenticado nos mostrara las opciones salir con este helper auth -->
                    @auth
                        <div class="col-md-12 text-end">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf

                                <button type="submit" class="btn btn-outline-dark btn-sm me-3 text-uppercase fw-bolder rounded">Salir</button>
                            </form>
                        </div>
                    @endauth


                    <!-- Cuando le usuario no este autenticado nos mostrara las opciones de login y crear cuenta con este helper guest -->
                    @guest
                        <div class="col-md-12 text-end align-items-center">
                            <ul class="navbar-nav col-md-12 mb-2 fw-bolder">

                                <li><a href="#" class="nav-link px-3">Inicio</a></li>
                                <li><a href="#" class="nav-link px-3">Servicios</a></li>
                                <li><a href="#" class="nav-link px-3">Pricing</a></li>
                                <li><a href="#" class="nav-link px-3">FAQs</a></li>
                                <li><a href="#" class="nav-link px-3">Nosotros</a></li>
                            </ul>
                            
                            <a href="{{route('login')}}">
                                <button class="btn btn-outline-dark btn-sm text-uppercase fw-bolder me-2" type="button">Login</button>
                            </a>
                            <a href="{{ route('register') }}">
                                <button class="btn btn-outline-dark btn-sm text-uppercase fw-bolder" type="button">Crear Cuenta</button>
                            </a>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>
    </header>
    <!------------Header------------>

    <!------------Menu principal------------>
    <main>
        @yield('content')
    </main>
    <!------------Menu principal------------>

    <!------------Footer------------>
    <footer class="bg-dark text-center text-lg-start text-white">            
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            @yield('copyright')
            © {{ now()->year }} Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
    </footer>
    <!------------Footer------------>


    <!-- Fontawesome CDN Link -->    
    <script src="https://kit.fontawesome.com/0c9b1b07bb.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS Link --> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>