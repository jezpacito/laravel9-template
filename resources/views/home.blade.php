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

@endsection
