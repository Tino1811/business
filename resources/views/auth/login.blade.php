@extends('layouts.profile')

@section('title')
    Iniciar Sesión
@endsection

@section('content')
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <style>
          .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.938) !important;
            backdrop-filter: saturate(200%) blur(25px);
          }
        </style>
      
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
          <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
              <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(220, 72%, 59%)">
                The best offer <br />
                <span style="color: hsl(17, 86%, 48%)">for your business</span>
              </h1>
              <p class="mb-4 opacity-70" style="color: hsl(216, 8%, 12%)">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Temporibus, expedita iusto veniam atque, magni tempora mollitia
                dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                ab ipsum nisi dolorem modi. Quos?
              </p>
            </div>
      
            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
              <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
              <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
      
              <div class="card bg-glass rounded-3 border border-2">
                <div class="card-body px-4 py-5 px-md-5">
                <form action="{{ route('login') }}" method="POST" novalidate>
                    @csrf

                    <div class="row">
                        <div class="col-md-12 mb-5 text-center text-secondary fw-bolder fs-4">
                            INICIAR SESION
                        </div>

                        @if (session('mensaje'))
                            <p class="form-control badge bg-danger text-wrap text-center fw-normal">
                                {{ session('mensaje') }}
                            </p>
                        @endif

                        <div class="form-outline mb-4">
                            <label for="email" class="form-label fw-bolder text-secondary text-uppercase">
                                Email
                              </label>
                            <input 
                                id="email"
                                name="email"
                                type="email" 
                                placeholder="Escriba su correo electrónico"
                                class="mb-1 form-control @error('email') border border-danger @enderror" 
                                value="{{ old('email') }}"
                            />
    
                            @error('email')
                                <p class="form-control badge bg-danger text-wrap text-center fw-normal">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
    
                        <div class="form-outline mb-4">
                            <label id="password" for="password_confirmation" class="form-label fw-bolder text-secondary text-uppercase">
                                Contraseña
                            </label>
                            <input 
                                id="password"
                                name="password"
                                type="password" 
                                placeholder="Escriba su contraseña"
                                class="mb-1 form-control @error('password') border border-danger @enderror" 
                            />
    
                            @error('password')
                                <p class="form-control badge bg-danger text-wrap text-center fw-normal">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mb-5">
                          <input type="checkbox" name="remember"><label class="text-normal fw-light ms-1">Mantener sesión abierta</label>
                        </div>

                        <input 
                        type="submit" 
                        value="INGRESAR" 
                        class="btn btn-primary btn-block mb-4 fw-bolder"
                        />
                    </div>  
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Design Block -->
@endsection