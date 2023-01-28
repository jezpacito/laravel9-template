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

                <form method="POST" action={{route('categories.store')}}>
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Description</label>
                        <textarea type="text" name="description" class="form-control" id="inputAddress2" placeholder="Description"> </textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection
