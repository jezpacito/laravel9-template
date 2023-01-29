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

                <form method="POST" action={{route('stocks.store')}}>
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputState">Products</label>
                            <select id="inputState" class="form-control {{ $errors->has('products') ? 'is-invalid' : '' }}" name="product_id" id="products" required>
                                @foreach($products as $id => $product)
                                <option value="{{ $product->id }}" {{ in_array($id, old('product', [])) ? 'selected' : '' }}>{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Number of Product/Stocks to be Added</label>
                        <input type="number" min=0 name="number_of_stocks_added" class="form-control" placeholder="Add stock"> </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection
