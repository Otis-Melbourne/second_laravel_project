@extends('layouts.master')

@section('content')

    <div class="container mt-4">

      <div class="mb-4">
        <div class="mb-4">
          <form action="{{ url("logout") }}" method="POST">
            @csrf
            <button type="submit" href="{{ url("logout") }}" class="btn btn-outline-danger"> Logout </button>
            <a href="{{ url("posts/create") }}" class="btn btn-outline-success"> New post </a>
          </form>

        </div>

      </div>

        <div class="card">
            <div class="card-header text-center">
              Posts 
            </div>

              @foreach ($posts as $post)
                <div class="card-body">
                  <h5 class="card-title">{{ $post->name }} </h5>
                  <p class="card-text">{{  $post->description }} </p>
                  <p class="card-text"> <span class="text-danger"> Category :</span>  {{  $post->category->name }} </p>
                  <form method="POST" action="{{ route("posts.destroy", ['post' => $post->id ]) }}">
                        <a href="{{ route("posts.show", ['post' => $post->id]) }}" class="btn btn-outline-secondary"> View </a>
                        <a href="{{ route("posts.edit", ['post' => $post->id ]) }}" class="btn btn-outline-primary"> update </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger"> delete </button>                  
                  </form>

                </div>  
                <hr>
              @endforeach
            
          </div>
    </div>
@endsection
