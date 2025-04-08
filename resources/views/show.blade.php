@extends('layouts.master')

@section('content')

    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center">
              Posts 
            </div>

                <div class="card-body">
                    <h5 class="card-title">{{ $post->name }} </h5>
                    <p class="card-text">{{  $post->description }} </p>
                    <p class="card-text"> <span class="text-danger"> Category : </span> {{  $post->category->name }} </p>
                    <a href="{{ url("posts") }}" class="btn btn-outline-success"> Back </a>
                </div>  
                <hr>
            
          </div>
    </div>
@endsection
