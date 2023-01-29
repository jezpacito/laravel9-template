@extends('layouts.master')
@section('content')

<div>
    <div class="main-content">
        @include('layouts.partials.headerNav',['name'=>'Add User'])
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action={{route('purchases.store')}}>
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Product</label>
                            <select id="inputState" class="form-control {{ $errors->has('products') ? 'is-invalid' : '' }}" name="product_id" id="products" required>
                                @foreach($products as $id => $product)
                                <option value="{{ $product->id }}" {{ in_array($id, old('product', [])) ? 'selected' : '' }}>{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="form-group ">
                        <label for="inputState">Pricing Type</label>
                        <select id="inputState" class="form-control" name="pricing_type">
                            <option value='wholesale_price'>{{$prices['wholesale_price']}}</option>
                            <option value='regular_price'>{{$prices['regular_price']}}</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Product Piece/s</label>
                            <input type="number" min=0 name=" total_product" class="form-control" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection
