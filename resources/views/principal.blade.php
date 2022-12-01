@extends('layouts.app')

@section('title')
    Principal
@endsection

@section('content')
    <div class="container-fluid">

        <!-- First section SEO-->
        <section class="bg-light mt-5">
            <div class="container">
                <div class="row col-lg-12 col-md-12 ">
                    <div class="col-md-6 text-md-start col-sm-12 text-start">
                        <h1 class="titulo_h1 m-5">All in one SEO tool need to grow your business rapidly</h1>
                        <p class="text_1 py-3 m-5"> 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur numquam dolorum vero. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum adipisci maiores delectus modi eos libero.
                        </p>
                        <a href="" class="btn btn-primary text-wrap mx-md-3 py-sm-3 px-sm-5 rounded-pill ms-5 my-3 fw-bolder">Free Quote</a>
                        <a href="" class="btn btn-outline-primary text-wrap mx-md-3 py-sm-3 px-sm-5 rounded-pill fw-bolder">Contact Us</a>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center p-5">
                        <img src="{{ asset('img/principal/developer.svg') }}" alt="developer" width="90%" height="90%" class="img-fluid py-4">
                    </div>
                </div>
            </div>
        </section>
        <!-- End First section SEO-->

        
        <!-- Second section - About us -->
        <section class="my-5">
            <div class="row col-lg-12 col-md-12">
                <div class="col-lg-6 col-md-6">
                    <div class="position-relative m-5">
                        <h6 class="position-relative text-primary  fs-5">
                            <i class='bx bxs-category-alt'></i>
                            About Us
                        </h6>
                        <h2 class="titulo_h2">
                            The best SEO solution with 10 years of experience
                        </h2>
    
                        <p class="ps-5 mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat adipisci vel assumenda quos nam doloremque architecto tempora libero iure, accusamus ad et. Qui voluptates optio veniam suscipit praesentium sint! Corporis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure animi aperiam, quibusdam possimus.
                        </p>
                        <div class="row mx-4">
                            <div class="col-sm-6">
                                <h6 class="mb-3">
                                    <i class='bx bx-check text-primary fw-bolder fs-4 me-2'></i>
                                    Award Wining
                                </h6>
                                <h6 class="mb-3">
                                    <i class='bx bx-check text-primary fw-bolder fs-4 me-2'></i>
                                    Professional Staff
                                </h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3">
                                    <i class='bx bx-check text-primary fw-bolder fs-4 me-2'></i>
                                    24/7 Support
                                </h6>
                                <h6 class="mb-3">
                                    <i class='bx bx-check text-primary fw-bolder fs-4 me-2'></i>
                                    Fair Prices
                                </h6>
                            </div>
                        </div>
                        <div class="d-flex pt-5 mx-5">
                            <a href="" class="btn btn-primary rounded-pill px-4 me-5">Read More</a>
                            <a href="" class="me-3">
                                <i class='bx bxl-facebook fs-2'></i>
                            </a>
                            <a href="" class="me-3">
                                <i class='bx bxl-instagram fs-2'></i>
                            </a>
                            <a href="" class="me-3">
                                <i class='bx bxl-whatsapp fs-2'></i>
                            </a>
                            <a href="" class="me-3">
                                <i class='bx bxl-github fs-2'></i>
                            </a>
                            <a href="">
                                <i class='bx bxl-tiktok fs-2'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 align-items-center" style="background-color: orange">
                    <img src="" alt="">
                </div>
            </div>
        </section>

        <!-- End Second section - About us -->

        <!-- Third section - Cards --> 
        <!-- <div class="row col-md-12 my-5" style="background-color: yellow"> -->
        <div class="row col-lg-12 my-5 shadow-lg bg-body rounded">

            <div class="col-lg-6 text-lg-start col-sm-6 text-start p-4">
                <div class="card mb-3 p-3" style="max-width: 620px;">
                    <div class="row g-0 px-3">
                        <div class="col-md-4">
                            <img src="{{ asset('img/principal/caja-fuerte.gif') }}" class="img-fluid rounded-start" alt="caja-fuerte" width="80%" height="80%">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">Your safe </h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to additional content.
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 text-lg-start col-sm-6 text-start p-4">
                <div class="card mb-3 p-3" style="max-width: 620px;">
                    <div class="row g-0 px-3">
                        <div class="col-md-4">
                            <img src="{{ asset('img/principal/bolsa-dinero.gif') }}" class="img-fluid rounded-start" alt="bolsa-dinero" width="80%" height="80%">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">Investments</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to additional content. 
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 text-lg-start col-sm-6 text-start p-4">
                <div class="card mb-3 p-3" style="max-width: 620px;">
                    <div class="row g-0 px-3">
                        <div class="col-md-4">
                            <img src="{{ asset('img/principal/telefono.gif') }}" class="img-fluid rounded-start" alt="telefono" width="80%" height="80%">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">Contact Us</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to additional content. 
                            </p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>

            <div class="col-lg-6 text-lg-start col-sm-6 text-start p-4">
                <div class="card mb-3 p-3" style="max-width: 620px;">
                    <div class="row g-0 px-3">
                        <div class="col-md-4">
                            <img src="{{ asset('img/principal/ingresos.gif') }}" class="img-fluid rounded-start" alt="ingresos" width="80%" height="80%">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">Finance</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to additional content. 
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        <!-- End Third section - Cards -->

        <!-- Fourth section - Comentary -->
        <div class="row col-lg-12 mb-5">
            <div class="col-lg-3 col-sm-12 mt-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class='bx bxs-quote-left fs-1 mb-2'></i>                       
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" width="75px" height="75px" src="{{ asset('img/user.svg') }}" alt="" >
                            <div class="ps-3">
                                <h6 class="card-title">Client Name</h6>  
                                <small>Profesion</small>
                            </div>                        
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12 mt-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class='bx bxs-quote-left fs-1 mb-2'></i>                       
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" width="75px" height="75px" src="{{ asset('img/user.svg') }}" alt="" >
                            <div class="ps-3">
                                <h6 class="card-title">Client Name</h6>  
                                <small>Profesion</small>
                            </div>                        
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12 mt-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class='bx bxs-quote-left fs-1 mb-2'></i>                       
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" width="75px" height="75px" src="{{ asset('img/user.svg') }}" alt="" >
                            <div class="ps-3">
                                <h6 class="card-title">Client Name</h6>  
                                <small>Profesion</small>
                            </div>                        
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12 mt-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class='bx bxs-quote-left fs-1 mb-2'></i>                       
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" width="75px" height="75px" src="{{ asset('img/user.svg') }}" alt="" >
                            <div class="ps-3">
                                <h6 class="card-title">Client Name</h6>  
                                <small>Profesion</small>
                            </div>                        
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div> 
        <!-- End Fourth section - Comentary --> 

        <!-- Fifth section - Information -->
        <!-- <div class="row col-lg-12 align-items-center" style="background-color: brown">
            <div class="col-lg-4 col-md-3 col-sm-1">
                <div class="card text-center align-items-center my-3 py-4 shadow p-3 mb-5 bg-body rounded" style="width: 22rem">
                    <img src="{{ asset('img/bg.jpg') }}" class="img-fluid shadow p-3 mb-5 bg-body rounded" alt="..." width="75%" height="75%">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-1">
                <div class="card text-center align-items-center my-3 py-4 shadow p-3 mb-5 bg-body rounded" style="width: 22rem">
                    <img src="{{ asset('img/bg.jpg') }}" class="img-fluid shadow p-3 mb-5 bg-body rounded" alt="..." width="75%" height="75%">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-1">
                <div class="card text-center align-items-center my-3 py-4 shadow p-3 mb-5 bg-body rounded" style="width: 22rem">
                    <img src="{{ asset('img/bg.jpg') }}" class="img-fluid shadow p-3 mb-5 bg-body rounded" alt="..." width="75%" height="75%">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-1">
                <div class="card text-center align-items-center my-3 py-4 shadow p-3 mb-5 bg-body rounded" style="width: 22rem">
                    <img src="{{ asset('img/bg.jpg') }}" class="img-fluid shadow p-3 mb-5 bg-body rounded" alt="..." width="75%" height="75%">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-1">
                <div class="card text-center align-items-center my-3 py-4 shadow p-3 mb-5 bg-body rounded" style="width: 22rem">
                    <img src="{{ asset('img/bg.jpg') }}" class="img-fluid shadow p-3 mb-5 bg-body rounded" alt="..." width="75%" height="75%">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-1">
                <div class="card text-center align-items-center my-3 py-4 shadow p-3 mb-5 bg-body rounded" style="width: 22rem">
                    <img src="{{ asset('img/bg.jpg') }}" class="img-fluid shadow p-3 mb-5 bg-body rounded" alt="..." width="75%" height="75%">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            
        </div> -->
        <!-- Fifth section - Information -->
    </div>
@endsection