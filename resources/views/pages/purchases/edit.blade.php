@extends('layouts.master')
@section('content')

<div>category
    <div class="main-content">
        @include('layouts.partials.headerNav',['name'=>'Edit User'])
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

                <form method="POST" action="{{ route("categories.update", [$category->id]) }}">
                    @method('PUT')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name', $category->name) }}" required>
                        </div>
                    </div>
                    <div class=" form-group">
                        <label for="inputAddress2">Description</label>
                        <textarea type="text" name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}">{{ old('description', $category->description) }} </textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection
