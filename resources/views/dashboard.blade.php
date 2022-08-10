@extends('layout')
@section('menu', 'Bioskop App')
@section('sub_menu', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <i class="bx bx-layer float-right m-0 h2 text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                <h3 class="mb-3" data-plugin="counterup">1,587</h3>
                <span class="badge badge-success mr-1"> +11% </span> <span class="text-muted">From previous period</span>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <i class="bx bx-dollar-circle float-right m-0 h2 text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                <h3 class="mb-3">$<span data-plugin="counterup">46,782</span></h3>
                <span class="badge badge-danger mr-1"> -29% </span> <span class="text-muted">From previous period</span>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <i class="bx bx-bx bx-analyse float-right m-0 h2 text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Average Price</h6>
                <h3 class="mb-3">$<span data-plugin="counterup">15.9</span></h3>
                <span class="badge badge-warning mr-1"> 0% </span> <span class="text-muted">From previous period</span>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <i class="bx bx-basket float-right m-0 h2 text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                <h3 class="mb-3" data-plugin="counterup">1,890</h3>
                <span class="badge badge-success mr-1"> +89% </span> <span class="text-muted">Last year</span>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-right position-relative">
                    <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#" class="dropdown-item">Action</a></li>
                        <li><a href="#" class="dropdown-item">Another action</a></li>
                        <li><a href="#" class="dropdown-item">Something else here</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a href="#" class="dropdown-item">Separated link</a></li>
                    </ul>
                </div>
                <h4 class="card-title d-inline-block">Daily Sales</h4>

                <div id="morris-donut-example" class="morris-chart" style="height: 260px;"></div>

                <div class="row text-center mt-4">
                    <div class="col-6">
                        <h4>5,459</h4>
                        <p class="text-muted mb-0">Total Sales</p>
                    </div>
                    <div class="col-6">
                        <h4>18</h4>
                        <p class="text-muted mb-0">Open Compaign</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-right position-relative">
                    <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#" class="dropdown-item">Action</a></li>
                        <li><a href="#" class="dropdown-item">Another action</a></li>
                        <li><a href="#" class="dropdown-item">Something else here</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a href="#" class="dropdown-item">Separated link</a></li>
                    </ul>
                </div>
                <h4 class="card-title d-inline-block">Statistics</h4>

                <div id="morris-bar-example" class="morris-chart" style="height: 260px;"></div>

                <div class="row text-center mt-4">
                    <div class="col-6">
                        <h4>$1875.54</h4>
                        <p class="text-muted mb-0">Revenue</p>
                    </div>
                    <div class="col-6">
                        <h4>541</h4>
                        <p class="text-muted mb-0">Total Offers</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-right position-relative">
                    <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#" class="dropdown-item">Action</a></li>
                        <li><a href="#" class="dropdown-item">Another action</a></li>
                        <li><a href="#" class="dropdown-item">Something else here</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a href="#" class="dropdown-item">Separated link</a></li>
                    </ul>
                </div>
                <h4 class="card-title d-inline-block">Total Revenue</h4>

                <div id="morris-line-example" class="morris-chart" style="height: 260px;"></div>

                <div class="row text-center mt-4">
                    <div class="col-6">
                        <h4>$7841.12</h4>
                        <p class="text-muted mb-0">Total Revenue</p>
                    </div>
                    <div class="col-6">
                        <h4>17</h4>
                        <p class="text-muted mb-0">Open Compaign</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row-->
@endsection