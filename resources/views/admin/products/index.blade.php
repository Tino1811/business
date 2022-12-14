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
        <div class="row ">
           <table class="table table-responsive caption-top table-sm table-hover ">
            
            <caption>Lista de productos</caption>
            
            <thead class="text-uppercase">
                <tr>
                    <th class="text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
                    <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descripcion</th>
                    
                    {{-- <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Categoria</th> --}}
                    {{-- <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stock</th> --}}
                    <th class="text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">Imagen</th>
                    <th></th>
                    <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Precio</th>
                    <th></th>
                    <th class="text-end text-secondary text-xxs font-weight-bolder opacity-7">Accion</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="pe-3 text-center">{{ $product->id }}</td>
                        <td>{{ $product->name_product }}</td>
                        <td class="px-4">{{ $product->description_product }}</td>
                        
                        {{-- <td>{{ $product->categories->name_category }}</td> --}}
                        {{-- <td class="text-end">{{ $product->stock_product}}</td> --}}
                        <td>
                            {{-- <div class="d-flex px-2 py-1"> --}}
                                <div>
                                    <img src="{{ $product->image_product}}" class="img-fluid img-thumbnail">
                                </div>
                            {{-- </div> --}}
                        </td>

                        <th></th>

                        <td class="text-end">${{ $product->precio_product}}</td>

                        <td></td>

                        <td class="text-center">
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                @csrf

                                @method('DELETE')

                                <a class="btn btn-primary btn-sm rounded-pill" href="{{ route('admin.products.edit', $product) }}">Editar</a>

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
                    <th class="text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
                    <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descripcion</th>
                    
                    {{-- <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Categoria</th> --}}
                    {{-- <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stock</th> --}}
                    <th class="text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">Imagen</th>
                    <th></th>
                    <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Precio</th>
                    <th></th>
                    <th class="text-end text-secondary text-xxs font-weight-bolder opacity-7">Accion</th>
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

    {{-- <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Technology</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs">John Michael</h6>
                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                        </div>
                    </div>
                    </td>
                    <td>
                    <p class="text-xs font-weight-bold mb-0">Manager</p>
                    <p class="text-xs text-secondary mb-0">Organization</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm badge-success">Online</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                    </a>
                    </td>
                </tr>
      
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs">Alexa Liras</h6>
                      <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Programator</p>
                  <p class="text-xs text-secondary mb-0">Developer</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm badge-secondary">Offline</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                </td>
                <td class="align-middle">
                  <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                  </a>
                </td>
              </tr>
      
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg" class="avatar avatar-sm me-3">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs">Laurent Perrier</h6>
                      <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Executive</p>
                  <p class="text-xs text-secondary mb-0">Projects</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm badge-success">Online</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                </td>
                <td class="align-middle">
                  <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                  </a>
                </td>
              </tr>
      
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs">Michael Levi</h6>
                      <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Programator</p>
                  <p class="text-xs text-secondary mb-0">Developer</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm badge-success">Online</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                </td>
                <td class="align-middle">
                  <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                  </a>
                </td>
              </tr>
      
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs">Richard Gran</h6>
                      <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Manager</p>
                  <p class="text-xs text-secondary mb-0">Executive</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm badge-secondary">Offline</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                </td>
                <td class="align-middle">
                  <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                  </a>
                </td>
              </tr>
      
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg" class="avatar avatar-sm me-3">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs">Miriam Eric</h6>
                      <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Programtor</p>
                  <p class="text-xs text-secondary mb-0">Developer</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm badge-secondary">Offline</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                </td>
                <td class="align-middle">
                  <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    </div> --}}
@endsection