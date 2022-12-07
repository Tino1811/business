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
        </div>

        <div class="card">
            <div class="card-header">
                <a class="btn btn-success btn-sm" href="{{ route('admin.categories.create') }}">AGREGAR NUEVA CATEGORIA</a>
            </div>

            @if (session('info'))
                <div class="alert alert-success">
                    <strong>
                        <i class='bx bxs-check-circle fs-4'></i>
                        {{ (session('info')) }}
                    </strong>
                </div>
            @endif

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name_category }}</td>
                                <td>{{ $category->description_category }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit', $category) }}">EDITAR</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                        @csrf

                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm" type="submit">
                                            ELIMINAR
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection