@extends('layouts.profile')

@section('title')
    Products
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-start text-uppercase fw-bolder my-4">Crear nuevo producto</h4>
        </div>

        {{-- enctype="multipart/form-data" esta clase sireve para poder subir imagenes desde el formulario --}}
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="row col-lg-12 mt-4 border border-2 rounded-3">
                <div class="col-sm-8 my-3">
                    <label for="name_product" class="form-label fw-bolder text-secondary text-uppercase">
                        Nombre
                    </label>
                    <input 
                        id="name_product"
                        name="name_product"
                        type="text" 
                        placeholder="Ingrese el nombre del producto"
                        class="mb-1 form-control @error('name_product') border border-danger @enderror" 
                        value="{{ old('name_product') }}"
                    />

                    {{-- Error con la regla vaidate en store ProductController--}}
                    @error('name_product')
                        <p class="form-control badge bg-danger text-wrap text-center fw-normal">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
    
                <div class="col-lg-2 col-sm-6 my-3">
                    <label for="precio_product" class="form-label fw-bolder text-secondary text-uppercase">
                        Precio
                    </label>
                    <input 
                        id="precio_product"
                        name="precio_product"
                        type="number" 
                        placeholder="Valor producto"
                        class="mb-1 form-control @error('precio_product') border border-danger @enderror" 
                        value="{{ old('precio_product') }}"
                    />

                    {{-- Error con la regla vaidate en store ProductController--}}
                    @error('precio_product')
                        <p class="form-control badge bg-danger text-wrap text-center fw-normal">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="col-lg-2 col-sm-6 my-3">
                    <label for="stock_product" class="form-label fw-bolder text-secondary text-uppercase">
                        Stock
                    </label>
                    <input 
                        id="stock_product"
                        name="stock_product"
                        type="number" 
                        placeholder="Cantidad productos"
                        class="mb-1 form-control @error('stock_product') border border-danger @enderror" 
                        value="{{ old('stock_product') }}"
                    />
                </div>
                
                <div class="col-lg-8 col-sm-6 my-3">
                    <label for="featured" class="form-label fw-bolder text-secondary text-uppercase">
                        Imagen
                    </label>
                    <input 
                        id="featured"
                        name="featured"
                        type="file"
                        placeholder="Ingrese el peso del producto"
                        class="mb-1 form-control" 
                    />
                </div>
    
                <div class="col-lg-4 col-sm-6 my-3">
                    <label for="peso_product" class="form-label fw-bolder text-secondary text-uppercase">
                        Peso
                    </label>
                    <input 
                        id="peso_product"
                        name="peso_product"
                        type="text" 
                        placeholder="Ingrese el peso del producto"
                        class="mb-1 form-control"
                    />
                </div>
                
                <div class="col-lg-12 col-sm-6 my-3">
                    <label for="description_product" class="form-label fw-bolder text-secondary text-uppercase">
                        Descripción
                    </label>
                    <textarea 
                        id="description_product"
                        name="description_product"  
                        rows="3"
                        class="text-area form-control mb-3">
                    </textarea>

                    <input 
                    type="submit" 
                    value="GUARDAR" 
                    class="btn btn-primary btn-block"
                    />

                    <a class="btn btn-danger" href="{{ route('products.index') }}" role="button">
                        REGRESAR
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection