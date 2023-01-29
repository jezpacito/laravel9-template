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

                <form method="POST" action={{route('products.store')}}>
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Brand</label>
                            <input type="text" name="brand" class="form-control" id="inputEmail4" placeholder="Brand" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Description</label>
                        <textarea type="text" name="description" class="form-control" id="inputAddress2" placeholder="Description"> </textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Category</label>
                            <select id="inputState" class="form-control {{ $errors->has('categories') ? 'is-invalid' : '' }}" name="category_id" id="categories" required>
                                @foreach($categories as $id => $category)
                                <option value="{{ $category->id }}" {{ in_array($id, old('category', [])) ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Stock Available</label>
                            <input type="number" name="stocks_available" min="0" class="form-control" id="inputEmail4" placeholder="" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Wholesale Price</label>
                            <input type="number" name="wholesale_price" min="0" class="form-control" id="inputEmail4" placeholder="0" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Regular Price</label>
                            <input type="number" name="regular_price" min="0" class="form-control" id="inputEmail4" placeholder="0" required>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection
