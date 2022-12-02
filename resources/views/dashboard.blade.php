@extends('layouts.profile')

@section('title')
    Dashboard
@endsection

@section('content')

    <!-- Cards -->
    <div class="container">
        <div class="row text-center">
            <h4 class="text-start text-uppercase fw-bolder my-4">Dashboard</h4>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card mb-3">
                    <div class="row g-0 bg-light text-dark border border-2 shadow p-3 bg-body rounded">
                        <div class="col-lg-8 col-md-8 col-sm-6">
                            <div class="card-body text-start">
                                <p class="card-title fw-bold">PRODUCTS</p>
                                <span class="fw-bold text-primary fs-4">249</span>
                            </div>
                        </div>
                        <div class="abs-center col-lg-4 col-md-4 col-sm-6">
                            <i class='bx bx-box text-primary fs-1'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card mb-3">
                    <div class="row g-0 bg-light text-dark border border-2 shadow p-3 bg-body rounded">
                        <div class="col-lg-8 col-md-8 col-sm-6">
                            <div class="card-body text-start">
                                <p class="card-title fw-bold">CATEGORIES</p>
                                <span class="fw-bold text-warning fs-4">123</span>
                            </div>
                        </div>
                        <div class="abs-center col-lg-4 col-md-4 col-sm-6">
                            <i class='bx bx-category-alt text-warning fs-1'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card mb-3">
                    <div class="row g-0 bg-light text-dark border border-2 shadow p-3 bg-body rounded">
                        <div class="col-lg-8 col-md-8 col-sm-6">
                            <div class="card-body text-start">
                                <p class="card-title fw-bold">CUSTOMERS</p>
                                <span class="fw-bold text-secondary fs-4">54</span>
                            </div>
                        </div>
                        <div class="abs-center col-lg-4 col-md-4 col-sm-6">
                            <i class='bx bx-group text-secondary fs-1'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card mb-3">
                    <div class="row g-0 bg-light text-dark border border-2 shadow p-3 bg-body rounded">
                        <div class="col-lg-8 col-md-8 col-sm-6">
                            <div class="card-body text-start">
                                <p class="card-title fw-bold">SALES ORDERS</p> 
                                <span class="fw-bold text-success fs-4 pe-4">15</span>
                            </div>
                        </div>
                        <div class="abs-center col-lg-4 col-md-4 col-sm-6">
                            <i class='bx bx-cart-alt text-success fs-1'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cards -->

    <!-- Charts -->
    <div class="row m-4 border">
        <div class="col-lg-6 col-md-6" style="max-width: 40%">
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <!-- Charts -->

@endsection

@section('scripts')

    <!-- Charts (script para grafica de barras) -->
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Blue', 'Red', 'Orange', 'Yellow', 'Green', 'Purple'],
            datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 3
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });
    </script>
    <!-- Charts (script para grafica de barras) -->
@endsection