@extends('layout')

@section('content')
    <div class="container">
        <h2>Edit Receipe</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/receipe/{{$receipe->id}}" method="POST">
            {{ method_field("PATCH") }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Receipe Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$receipe->name}}" required>
            </div>
            <div class="form-group">
                <label for="ingredients">Ingredients</label>
                <input type="text" class="form-control" name="ingredients" id="ingredients" value="{{$receipe->ingredients}}" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category" class="form-control">
                    @foreach($category as $value)
                        <option value="{{$value->id}}"
                        {{ $receipe->categories->id == $value->id ? "selected" : ""}}>{{$value->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection