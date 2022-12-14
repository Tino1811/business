@extends('layouts.profile')

@section('title')
    Categories
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-start text-uppercase fw-bolder my-4">
                Categorías
            </h4>
            <hr>
        </div>

        <!-- Al momento de crear una categoria muestra este mensaje -->
        <a class="btn btn-success btn-sm mb-2" href="{{ route('admin.categories.create') }}">Agregar nueva categoría</a>
        @if (session('info'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>
                    <i class='bx bxs-check-circle fs-4'></i>
                    {{ (session('info')) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </strong>
            </div>
        @endif

        <!-- Tarjetas llamando a cada dato mediante las consultas con laravel -->
        <div class="row row-cols-1 row-cols-md-3 g-4 my-2 shadow p-3 mb-5 bg-body rounded">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <div class="card card-frame h-100">
                        <h5 class="card-header text-center">
                            <a href="{{ route('admin.products.index') }}">{{ $category->name_category }}</a>  
                        </h5>
                        <img src="{{ asset('img/products/jabon_liquido.png')}}" class="card-img-top" alt="img_category">
                        <div class="card-body">
                            <p class="card-text">{{ $category->description_category }}</p>

                            <hr>

                            
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                @csrf

                                @method('DELETE')

                                <a class="btn btn-primary btn-sm rounded-pill" href="{{ route('admin.categories.edit', $category) }}">Editar</a>

                                <button class="btn btn-danger btn-sm rounded-pill" type="submit">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated: {{ $category->updated_at }}</small>
                        </div>
                        
                    </div>
                </div> 
            @endforeach
            
        </div>         
        <!-- Tarjetas llamando a cada dato mediante las consultas con laravel -->
    </div>
@endsection