@extends('layouts.profile')

@section('title')
    Products
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <h4 class="text-start text-uppercase fw-bolder my-4">
                Productos
                <a class="btn btn-primary text-end" href="{{ route('products.create') }}" role="button">
                    CREAR PRODUCTO
                </a>
            </h4>
            
        </div>

        {{-- <ul>
            @foreach ($products as $product)
                <li>{{$product->name_product}}</li>
            @endforeach
        </ul>
        {{ $products->links() }} --}}
    
        {{-- <div class="table-responsive">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th scope="col">CÓDIGO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">STOCK</th>
                        <th scope="col">IMAGEN</th>
                        <th scope="col">STOCK</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div> --}}

        <div class="row">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('img/products/jabon_liquido.png') }}" class="img-fluid rounded-start" alt="jabon_liquido">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                        @foreach ($products as $product)
                            <a href="{{ route('products.show', $product->id) }}">
                                <h5 class="card-title">{{$product->name_product}}</h5>
                            </a>
                            
                            <p class="card-text">
                                {{$product->description_product}}
                            </p>
                            <h4>{{$product->precio_product}}</h4>
                        @endforeach
                    </div>
                    {{ $products->links() }}
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection