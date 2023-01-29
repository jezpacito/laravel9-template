@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 text-muted">Total Sales Products (Overall)</p>
                                <h2 class="m-b-0">{{$salesOverall}}</h2>
                            </div>

                        </div>
                        <div class="m-t-40">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                    <span class="text-gray font-weight-semibold font-size-13">All Products</span>
                                </div>
                            </div>
                            <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                <div class="progress-bar bg-primary" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 text-muted">Total Sales (WholeSale)</p>
                                <h2 class="m-b-0">{{$salesWholesale->sum('total_amount')}}</h2>
                            </div>

                        </div>
                        <div class="m-t-40">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                    <span class="text-gray font-weight-semibold font-size-13">Wholesale Pieces Sold: {{$salesWholesale->sum('total_product')}}</span>
                                </div>
                            </div>
                            <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 text-muted">Total Sales (Regular)</p>
                                <h2 class="m-b-0">{{$salesRegular->sum('total_amount')}}</h2>
                            </div>

                        </div>
                        <div class="m-t-40">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-warning badge-dot m-r-10"></span>
                                    <span class="text-gray font-weight-semibold font-size-13">Regular Pieces Sold: {{$salesRegular->sum('total_product')}}</span>
                                </div>
                            </div>
                            <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                <div class="progress-bar bg-warning" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 text-muted">Total Items</p>
                                <h2 class="m-b-0">{{$totalItems}}</h2>
                            </div>

                        </div>
                        <div class="m-t-40">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-secondary badge-dot m-r-10"></span>
                                    <span class="text-gray font-weight-semibold font-size-13">Total Products Available</span>
                                </div>
                            </div>
                            <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                <div class="progress-bar bg-secondary" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 text-muted">Total Sold Item</p>
                                <h2 class="m-b-0">{{$totalItemSold}}</h2>
                            </div>
                        </div>
                        <div class="m-t-40">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-secondary badge-dot m-r-10"></span>
                                    <span class="text-gray font-weight-semibold font-size-13">Sold Items</span>
                                </div>
                            </div>
                            <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                <div class="progress-bar bg-secondary" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Top Products</h5>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                    </div>
                </div>
                <div class="m-t-30">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-h-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="avatar avatar-image m-r-15">
                                        <img src="assets/images/others/thumb-9.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="m-b-0">
                                            <a href="javascript:void(0);" class="text-dark"> Gray Sofa</a>
                                        </h6>
                                        <span class="text-muted font-size-13">Home Decoration</span>
                                    </div>
                                </div>
                                <span class="badge badge-pill badge-cyan font-size-12">
                                    <span class="font-weight-semibold m-l-5">+18.3%</span>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item p-h-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="avatar avatar-image m-r-15">
                                        <img src="assets/images/others/thumb-10.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="m-b-0">
                                            <a href="javascript:void(0);" class="text-dark">Beat Headphone</a>
                                        </h6>
                                        <span class="text-muted font-size-13">Eletronic</span>
                                    </div>
                                </div>
                                <span class="badge badge-pill badge-cyan font-size-12">
                                    <span class="font-weight-semibold m-l-5">+12.7%</span>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item p-h-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="avatar avatar-image m-r-15">
                                        <img src="assets/images/others/thumb-11.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="m-b-0">
                                            <a href="javascript:void(0);" class="text-dark">Wooden Rhino</a>
                                        </h6>
                                        <span class="text-muted font-size-13">Home Decoration</span>
                                    </div>
                                </div>
                                <span class="badge badge-pill badge-cyan font-size-12">
                                    <span class="font-weight-semibold m-l-5">+9.2%</span>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item p-h-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="avatar avatar-image m-r-15">
                                        <img src="assets/images/others/thumb-12.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="m-b-0">
                                            <a href="javascript:void(0);" class="text-dark">Red Chair</a>
                                        </h6>
                                        <span class="text-muted font-size-13">Home Decoration</span>
                                    </div>
                                </div>
                                <span class="badge badge-pill badge-cyan font-size-12">
                                    <span class="font-weight-semibold m-l-5">+7.7%</span>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item p-h-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="avatar avatar-image m-r-15">
                                        <img src="assets/images/others/thumb-13.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="m-b-0">
                                            <a href="javascript:void(0);" class="text-dark">Wristband</a>
                                        </h6>
                                        <span class="text-muted font-size-13">Eletronic</span>
                                    </div>
                                </div>
                                <span class="badge badge-pill badge-cyan font-size-12">
                                    <span class="font-weight-semibold m-l-5">+5.8%</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5>Customers</h5>
                <div class="m-v-45 text-center" style="height: 220px">
                    <canvas class="chart" id="customer-chart"></canvas>
                </div>
                <div class="row p-t-25">
                    <div class="col-md-8 m-h-auto">
                        <div class="d-flex justify-content-between align-items-center m-b-20">
                            <p class="m-b-0 d-flex align-items-center">
                                <span class="badge badge-warning badge-dot m-r-10"></span>
                                <span>Direct</span>
                            </p>
                            <h5 class="m-b-0">350</h5>
                        </div>
                        <div class="d-flex justify-content-between align-items-center m-b-20">
                            <p class="m-b-0 d-flex align-items-center">
                                <span class="badge badge-primary badge-dot m-r-10"></span>
                                <span>Referral</span>
                            </p>
                            <h5 class="m-b-0">450</h5>
                        </div>
                        <div class="d-flex justify-content-between align-items-center m-b-20">
                            <p class="m-b-0 d-flex align-items-center">
                                <span class="badge badge-danger badge-dot m-r-10"></span>
                                <span>Social Network</span>
                            </p>
                            <h5 class="m-b-0">100</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Recent Orders</h5>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#5331</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image" style="height: 30px; min-width: 30px; max-width:30px">
                                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                </div>
                                                <h6 class="m-l-10 m-b-0">Erin Gonzales</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>8 May 2019</td>
                                    <td>$137.00</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-success badge-dot m-r-10"></span>
                                            <span>Approved</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5375</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image" style="height: 30px; min-width: 30px; max-width:30px">
                                                    <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                </div>
                                                <h6 class="m-l-10 m-b-0">Darryl Day</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>6 May 2019</td>
                                    <td>$322.00</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-success badge-dot m-r-10"></span>
                                            <span>Approved</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5762</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image" style="height: 30px; min-width: 30px; max-width:30px">
                                                    <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                                </div>
                                                <h6 class="m-l-10 m-b-0">Marshall Nichols</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>1 May 2019</td>
                                    <td>$543.00</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-success badge-dot m-r-10"></span>
                                            <span>Approved</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5865</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image" style="height: 30px; min-width: 30px; max-width:30px">
                                                    <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                                </div>
                                                <h6 class="m-l-10 m-b-0">Virgil Gonzales</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>28 April 2019</td>
                                    <td>$876.00</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-primary badge-dot m-r-10"></span>
                                            <span>Pending</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5213</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image" style="height: 30px; min-width: 30px; max-width:30px">
                                                    <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                                </div>
                                                <h6 class="m-l-10 m-b-0">Nicole Wyne</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>28 April 2019</td>
                                    <td>$241.00</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-success badge-dot m-r-10"></span>
                                            <span>Approved</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5211</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image" style="height: 30px; min-width: 30px; max-width:30px">
                                                    <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                                </div>
                                                <h6 class="m-l-10 m-b-0">Riley Newman</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>28 April 2019</td>
                                    <td>$872.00</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-danger badge-dot m-r-10"></span>
                                            <span>Rejected</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
