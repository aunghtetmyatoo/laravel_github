@extends('layout')

@section('content')
    <div class="container">
        <h2>Create Receipe</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/receipe" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Receipe Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="ingredients">Ingredients</label>
                <input type="text" class="form-control" name="ingredients" id="ingredients" value="{{ old('ingredients') }}" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" name="category" id="category" value="{{ old('category') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection