@extends('layouts.profile')

@section('title')
    Products
@endsection

@section('content')
<div class="container">
    <div class="row">
        <h4 class="text-start text-uppercase fw-bolder my-4">Crear nuevo producto</h4>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
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
    </div>
</div>
    
@endsection