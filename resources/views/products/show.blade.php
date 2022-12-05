@extends('layouts.profile')

@section('title')
    Producto | {{ $product->name_product }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-start text-uppercase fw-bolder my-4">
                Producto
            </h4>
            
        </div>
        <div class="row">
            <h5>{{ $product->name_product }}</h5>
            <p>
                <strong>Descripción:</strong>
                {{ $product->description_product}}
            </p>
            <p>
                <strong>Precio:</strong>
                {{ $product->precio_product}} $
            </p>
            <p>
                <strong>Imagen:</strong>
                <img src="{{ $product->featured}} " alt="">{{ $product->featured}} 
            </p>
            <div class="col-lg-12 col-sm-6 my-3">
                <a class="btn btn-success" href="{{ route('products.edit', $product) }}" role="button">
                    EDITAR
                </a>

                <a class="btn btn-danger" href="{{ route('products.index') }}" role="button">
                    REGRESAR
                </a>
            </div>
        </div>
        
    </div>
    
@endsection