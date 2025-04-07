@extends('layouts.master')

@section('content')

    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center">
              Featured
            </div>

              @foreach ($posts as $post)
                <div class="card-body">
                  <h5 class="card-title">{{ $post->name }} </h5>
                  <p class="card-text">{{  $post->description }} </p>
                  <a href="" class="btn btn-outline-primary"> View </a>
                </div>  
                <hr>
              @endforeach
            
          </div>
    </div>
@endsection
