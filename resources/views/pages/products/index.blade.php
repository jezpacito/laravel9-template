@extends('layouts.master')
@section('content')
<div>
    <div class="main-content">
        @include('layouts.partials.headerNav',['name'=>'Add Category'])
        <div class="card">
            <div class="card-body">
                <div class="row m-b-30">
                    <div class="col-lg-8">
                    </div>
                    <div class="col-lg-4 text-right">
                        <a href="{{route('products.create')}}" class="btn btn-primary">
                            <i class="anticon anticon-plus-circle m-r-5"></i>
                            <span>Add Product</span>
                        </a>
                    </div>
                </div>
                <livewire:product-table />
            </div>
        </div>
    </div>
</div>
@endsection