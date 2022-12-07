@extends('layouts.profile')

@section('title')
    Products | Crear Categoría
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-start text-uppercase fw-bolder my-4">Crear nueva categoría</h4>
        </div>

        <div class="card">
            <div class="card-body">

                <!-- Se creara un formulario utilizando el laravelcollective-->
                {!! Form::open(['route' => 'admin.categories.store']) !!}

                    <div class="form-group mb-3">
                        {!! Form::label('name_category', 'Nombre') !!}
                        {!! Form::text('name_category', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría']) !!}

                        @error('name_category')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        {!! Form::label('slug_category', 'Slug') !!}
                        {!! Form::text('slug_category', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoría', 'readonly']) !!}

                        @error('slug_category')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        {!! Form::label('description_category', 'Descripción') !!}
                        {!! Form::text('description_category', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una descripción de la categoría']) !!}

                        @error('description_category')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {!! Form::submit('CREAR CATEGORIA', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>
@endsection

@section('scripts')
        {{-- revisar esta seccion y poner el slug del campo name --}}
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#name_category").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug_category',
                space: '-'
            });
        });
    </script>
@endsection