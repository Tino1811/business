<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa - @yield('title')</title>
    <!-- Archive CSS Link --> 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Bootstrap CSS Link --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!------------Header------------>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <!-- Dashboard -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="btn btn-outline-light mx-2" aria-current="page" autocomplete="off" href="{{ route('post.index') }}">
                                <i class='bx bx-home-alt'></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>
                    <!-- Dashboard -->

                    <!-- Inventory -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown mx-2" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-task'></i>
                                Inventory
                                <i class='bx bxs-chevron-down' ></i>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="{{ route('category') }}">
                                        <i class='bx bx-category-alt'></i>
                                        <span class="ms-2">Categories</span> 
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('products.index') }}">
                                        <i class='bx bx-box'></i>
                                        <span class="ms-2">Products</span> 
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class='bx bx-check-circle'></i>
                                        <span class="ms-2">Services</span> 
                                    </a>
                                </li>
                            </ul>
                        </li>                            
                    </ul>
                    <!-- Inventory -->

                    <!-- Analytics -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">
                                <i class='bx bx-line-chart'></i>
                                Analytics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">
                                <i class='bx bx-bar-chart-square'></i>
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">
                                <i class='bx bx-archive'></i>
                                Archives
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown mx-2" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-cart-alt'></i>
                                Orders
                                <i class='bx bxs-chevron-down' ></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class='bx bx-cart-add'></i>
                                        <span class="ms-2">Purchase Orders</span> 
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class='bx bx-cart'></i>
                                        <span class="ms-2">Sales Orders</span> 
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">
                                <i class='bx bx-user'></i>
                                Clients
                            </a>
                        </li> 
                    </ul>
                    <!-- Clients -->

                    <!-- Profile -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropstart">
                            <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bxs-user-circle fs-1'></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class='bx bx-cog'></i>
                                        <span class="ms-2">Settings</span> 
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class='bx bx-user'></i>
                                        <span class="ms-2">Users</span> 
                                    </a>
                                </li>                            
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class='bx bx-task'></i>
                                        <span class="ms-2">Roles</span> 
                                    </a>
                                </li>    
                                <li><hr class="dropdown-divider"></li>
                                <!-- Cuando le usuario este autenticado nos mostrara las opciones salir con este helper auth -->
                                @auth
                                    
                                    <div class="col-lg-12 text-center">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf

                                            
                                            <button type="submit" class="btn btn-outline-primary btn-sm text-uppercase fw-bolder rounded">
                                                <i class='bx bx-log-out pe-1'></i>
                                                Cerrar Sesion
                                            </button>
                                        </form>
                                    </div>
                                @endauth
                            </ul>
                        </li>                            
                    </ul>   
                    <!-- Profile -->

                </div>
            </div>
        </nav>
    </header>
    <!------------Header------------>



    <!------------Menu principal------------>
    <main>
        <section class="container-fluid">
            @yield('content')
        </section>
    </main>
    <!------------Menu principal------------>



    <!------------Footer------------>
    <!------------Footer------------>

    
    <!-- Charts.js CDN Link -->   
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Fontawesome CDN Link -->    
    <script src="https://kit.fontawesome.com/0c9b1b07bb.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS Link --> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <!-- Aqui se agrega el codigo script para la grafica.
    NOTA: Poner <script>CODIGO AQUI</script> por que no esta referenciado --> 
    @yield('scripts')
</body>
</html>