@extends('layouts.master')

@section('content')

    <div class="container mt-4">


         <div class="card">
            <div class="card-header text-center">
              New Post
            </div>
                <div class="card-body container">
                    <form class="container p-4" method="POST" action="{{ route("posts.update", ['post' => $post->id ]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                          <label for="title">Title </label>
                          <input name="name" type="text" class="form-control" value="{{ old('name', $post->name ) }}" id="title" placeholder="Enter title">
                          @error('name')
                              <p class="text-danger">{{ $message }} </p>
                          @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="description"> Enter description </label>
                            <textarea name="description" class="form-control" id="description" rows="5">{{  old("description", $post->description) }} </textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route("posts.index") }}" class="btn btn-primary"> Back </a>


                      </form>
                </div>  
                <hr>
            
          </div>
    </div> 
@endsection
