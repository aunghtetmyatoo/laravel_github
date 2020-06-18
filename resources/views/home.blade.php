@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <h2>Home Page</h2>
                        @if (session('message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div>
                            <a href="/receipe/create"><button class="btn btn-success">Create</button></a>
                        </div>
                        @foreach($receipe as $value)
                                <a href="/receipe/{{$value->id}}">{{$value->name}}</a>
                                <hr>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection



