<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa - @yield('title')</title>
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
                            <a class="nav-link active" aria-current="page" href="#">
                                <i class='bx bx-home-alt'></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>
                    <!-- Dashboard -->

                    <!-- Management -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-briefcase-alt'></i>
                                Management
                                <i class='bx bxs-chevron-down' ></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class='bx bx-spreadsheet'></i>
                                        <span class="ms-2">Inventory</span> 
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class='bx bx-category-alt'></i>
                                        <span class="ms-2">Categories</span> 
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class='bx bxs-package'></i>
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
                    <!-- Management -->

                    <!-- Analytics -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class='bx bx-line-chart'></i>
                                Analytics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class='bx bx-message'></i>
                                Messages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class='bx bx-archive'></i>
                                Archives
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class='bx bx-cart'></i>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
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
        <section>
            @yield('content')
        </section>
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