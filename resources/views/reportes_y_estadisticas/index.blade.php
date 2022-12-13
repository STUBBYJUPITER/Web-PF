@extends('layouts.app')

@section('titulo')
    <title>Reportes y Estadisticas</title>
@endsection

@section('breadDescr')
    <h4 class="mb-sm-0 font-size-18">Reportes y Estadisticas</h4>
@endsection

@section('contenido')
    
    <div class="row">
        <div class="col-lg-6">
            
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Pie Chart</h4>
                    <div id="pie-chart" data-colors="[&quot;--bs-primary&quot;,&quot;--bs-warning&quot;, &quot;--bs-danger&quot;,&quot;--bs-info&quot;, &quot;--bs-success&quot;]" class="e-charts" style="user-select: none; position: relative;" _echarts_instance_="ec_1669929559197"><div style="position: relative; width: 751px; height: 350px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas style="position: absolute; left: 0px; top: 0px; width: 751px; height: 350px; user-select: none; padding: 0px; margin: 0px; border-width: 0px;" data-zr-dom-id="zr_0" width="751" height="350"></canvas></div><div></div></div>
                </div>
            </div>
                            
        </div>
        <div class="col-lg-6">
            
            <div class="card">
                <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>

                    <h4 class="card-title mb-4">Bar Chart</h4>

                    <div class="row text-center">
                        <div class="col-4">
                            <h5 class="mb-0">2541</h5>
                            <p class="text-muted text-truncate">Activated</p>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-0">84845</h5>
                            <p class="text-muted text-truncate">Pending</p>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-0">12001</h5>
                            <p class="text-muted text-truncate">Deactivated</p>
                        </div>
                    </div>
                    
                    <!-- nota width y height modificables despues de style -->
                    <canvas id="bar" data-colors="[&quot;--bs-success-rgb, 0.8&quot;, &quot;--bs-success&quot;]" style="display: block;" class="chartjs-render-monitor" width="751" height="300"></canvas>

                </div>
            </div>
                            
        </div>
        
                                
                            
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Reportes</h4>
                    <p class="card-title-desc">Use <code>.table-striped-columns</code> to add zebra-striping to any table column.</p>
        
                    <div class="table-responsive">
                        <table class="table table-striped-columns mb-0">
        
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
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
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
        
                </div>
            </div>
        </div>
    </div>
                                
    
                                    
                                       
                            
    
@endsection