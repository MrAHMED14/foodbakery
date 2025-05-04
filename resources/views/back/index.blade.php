@extends('back.master')

@section('title')
    Dashboard
@endsection

@section('content')

<div class="container-fluid">

    {{-- Page title --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    {{-- Page content --}}
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate"> Restaurants Registered</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{ $totalRestaurants }}">0</span>
                            </h4>
                        </div>

                        <div class="col-6">
                            <div id="mini-chart1" data-colors='["#003049"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate"> Users Registered</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{ $totalUsers }}">0</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="mini-chart2" data-colors='["#003049"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col-->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Profit Amount</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="45600">0</span> DA
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="mini-chart3" data-colors='["#2ab57d"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Profit Ration</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="45">0</span>%
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="mini-chart4" data-colors='["#c33333"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Line Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="lineChart" class="chartjs-chart" data-colors="[&quot;rgba(195, 51, 51, 0.2)&quot;, &quot;#c33333&quot;, &quot;rgba(235, 239, 242, 0.2)&quot;, &quot;#ebeff2&quot;]" width="500" height="500" style="display: block; box-sizing: border-box; height: 500px; width: 100%;"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Radar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="radar" class="chartjs-chart" data-colors="[&quot;rgba(42, 181, 125, 0.2)&quot;, &quot;#2ab57d&quot;, &quot;rgba(0, 48, 73, 0.2)&quot;, &quot;#003049&quot;]" width="499" height="320" style="display: block; box-sizing: border-box; height: 320px; width: 499px;"></canvas>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card-header">
                <h4 class="card-title mb-2">Recent Restaurants</h4>
            </div>
            <div class="card-body">
                @include('back.body.restaurant-table')
            </div>
        </div>
    </div>
</div>

@endsection

