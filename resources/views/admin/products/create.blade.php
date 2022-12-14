@extends('layouts.profile')

@section('title')
    Products | Crear producto
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-start text-uppercase fw-bolder my-3">Crear nuevo producto</h4>
        </div>

        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-8">
                    {{-- enctype="multipart/form-data" esta clase sireve para poder subir imagenes desde el formulario --}}
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="row col-lg-12 mt-4 border-0 rounded-3 shadow p-3 mb-5 bg-body rounded">
                            <div class="col-sm-12 my-3">
                                <label for="name_product" class="fw-bolder text-secondary text-uppercase">
                                    Nombre
                                </label>
                                <input 
                                    id="name_product"
                                    name="name_product"
                                    type="text" 
                                    placeholder="Producto 1"
                                    class="mb-1 form-control form-control-sm @error('name_product') border border-danger @enderror" 
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
                                <label for="peso_product" class="form-label fw-bolder text-secondary text-uppercase">
                                    Peso
                                </label>
                                <input 
                                    id="peso_product"
                                    name="peso_product"
                                    type="text" 
                                    placeholder="24 g"
                                    class="mb-1 form-control form-control-sm"
                                />
                            </div>

                            <div class="col-lg-2 col-sm-6 my-3">
                                <label for="stock_product" class="form-label fw-bolder text-secondary text-uppercase">
                                    Stock
                                </label>
                                <input 
                                    id="stock_product"
                                    name="stock_product"
                                    type="number" 
                                    placeholder="150"
                                    class="mb-1 form-control form-control-sm @error('stock_product') border border-danger @enderror" 
                                    value="{{ old('stock_product') }}"
                                />
                            </div>
                            
                            <div class="col-lg-6 col-sm-6 my-3">
                                <label for="categoria_id" class="form-label fw-bolder text-secondary text-uppercase">
                                    Categoria
                                </label>

                                <select class="form-control form-control-sm  mb-1"  id="categoria_id" name="categoria_id" type="text">
                                    <option selected>-- Seleccione --</option>
                                    {{-- @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                                    @endforeach --}}

                                </select>
                            </div>

                            <div class="col-lg-2 col-sm-6 my-3">
                                <label for="precio_product" class="form-label fw-bolder text-secondary text-uppercase">
                                    Precio 
                                </label>
                                <input 
                                    id="precio_product"
                                    name="precio_product"
                                    type="number" 
                                    placeholder="50.15"
                                    class="mb-1 form-control form-control-sm @error('precio_product') border border-danger @enderror" 
                                    value="{{ old('precio_product') }}"
                                />

                                {{-- Error con la regla vaidate en store ProductController--}}
                                @error('precio_product')
                                    <p class="form-control badge bg-danger text-wrap text-center fw-normal">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="col-lg-12 col-sm-6 my-3">
                                <label for="image_product" class="form-label fw-bolder text-secondary text-uppercase">
                                    Imagen
                                </label>
                                <input 
                                    id="image_product"
                                    name="image_product"
                                    type="file"
                                    class="mb-1 form-control form-control-sm" 
                                />
                            </div>
                            
                            <div class="col-lg-12 col-sm-6 my-3 ">
                                <label for="description_product" class="form-label fw-bolder text-secondary text-uppercase">
                                    Descripción
                                </label>
                                <textarea id="description_product" name="description_product" rows="3" class="text-area form-control form-control-sm mb-3"></textarea>

                                <input 
                                type="submit" 
                                value="GUARDAR" 
                                class="btn btn-primary btn-block btn-sm text-center"
                                />

                                <a class="btn btn-danger btn-sm" href="{{ route('admin.products.index') }}" role="button">
                                    REGRESAR
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
@endsection