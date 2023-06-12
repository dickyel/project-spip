@extends('layouts.dashboard')

@section('title')
    Bagian Dashboard
@endsection

@section('content-management')
    <main class="content">
        @include('includes.nav-profile')
      
        <section class="px-5 py-2">
            <header>
            <h3>Dashboard</h3>
            <p>Manage data dashboard anda</p>
            </header>
            <div class="container">
                <div class="row mb-2">
                    <div class="col-md-8 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <h5>Data Grafik Batang</h5>
                                <div>
                                <canvas id="chart-revenue" width="100%"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <div class="card-body ">
                                <h5>Data Grafik pie</h5>
                                <div>
                                    <canvas id="chart-budget" style="height: 226px; width: 100%">
                                    </canvas>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                
                    
                </div>
                <div class="row mb-2 ">
                
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <div class="card-body">
                            <h5>Data Grafik Batang Horizontal</h5>
                            <div>
                                <canvas id="bar-chart-horizontal-1" width="100%" ></canvas>
                            </div>
                            </div>
                        </div>
                    </div>
                
                
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <div class="card-body">
                            <h5>Data Grafik Batang Horizontal 2</h5>
                            <div>
                                <canvas id="bar-chart-horizontal-2" width="100%" ></canvas>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4 mb-2">
                        <div class="card">
                            <div class="card-body">
                            <h4>Data Checklist Kehadiran</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                            <h4>Incidents</h4>
                            
                            
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                            <h4>Change Request</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                            <h5>Change Request</h5>
                            <div>
                                <canvas id="doughnut-chart-3" style="height: 226px; width: 100%">
                                </canvas>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                            <h5>Change Request</h5>
                            <div>
                                <canvas id="doughnut-chart-2" style="height: 226px; width: 100%">
                                </canvas>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                            <h5>Change Request</h5>
                            <div>
                                <canvas id="doughnut-chart-4" style="height: 226px; width: 100%">
                                </canvas>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                            <h5>Change Request</h5>
                            <div>
                                <canvas id="doughnut-chart-5" style="height: 226px; width: 100%">
                                </canvas>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            
            </div>
            
        </section>
    </main>

@endsection