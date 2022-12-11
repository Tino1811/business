@extends('layouts.profile')

@section('title')
    Products
@endsection

@section('content')

    <div class="container">
        <div class="row col-12">
            <h4 class="text-start text-uppercase fw-bolder my-4">
                Productos
            </h4>
            <hr>
        </div>

        <!-- Al momento de crear una categoria muestra este mensaje -->
        <a class="btn btn-success btn-sm mb-3" href="{{ route('admin.products.create') }}">Agregar nuevo producto</a>
        @if (session('info'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>
                    <i class='bx bxs-check-circle fs-4'></i>
                    {{ (session('info')) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </strong>
            </div>
        @endif
    </div>

    <div class="container">
        <div class="row table-responsive">
           <table class="table caption-top table-sm table-hover  align-middle">
            <caption>Lista de productos</caption>
            
            <thead class="text-uppercase">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name_product }}</td>
                        <td>{{ $product->description_product }}</td>
                        <td>$ {{ $product->precio_product}}</td>
                        <td>{{ $product->categories->name_category }}</td>
                        <td class="text-end">{{ $product->stock_product}}</td>
                        <td>{{ $product->image_product}}</td>

                        <td width="10px">
                            <a class="btn btn-primary btn-sm rounded-pill" href="{{ route('admin.products.edit', $product) }}">Editar</a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                @csrf

                                @method('DELETE')

                                <button class="btn btn-danger btn-sm rounded-pill" type="submit">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot class="text-uppercase">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Actions</th>
                </tr>
            </tfoot>
           </table>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-sm justify-content-end">
              <li class="page-item">
                <a class="btn btn-outline-primary btn-sm rounded-pill" href="#">
                    <i class="bi bi-arrow-left-circle"></i>
                    Atras
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="btn btn-outline-primary btn-sm rounded-pill" href="#">
                    Siguie
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
              </li>
            </ul>
          </nav>
    </div>
@endsection