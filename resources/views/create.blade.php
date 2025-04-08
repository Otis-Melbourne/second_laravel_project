@extends('layouts.master')

@section('content')

    <div class="container mt-4">

      <div class="mb-4">
        <a href="{{ url("posts") }}" class="btn btn-outline-success"> Back </a>
      </div>

         <div class="card">
            <div class="card-header text-center">
              New Post
            </div>
                <div class="card-body container">
                    <form class="container p-4" method="POST" action="{{  url("posts") }}">
                        @csrf
                        <div class="form-group mb-3">
                          <label for="title">Title </label>
                          <input name="name" type="text" value="{{ old("title") }}" class="form-control" id="title" placeholder="Enter title">
                          @error('name')
                              <p class="text-danger">{{ $message }} </p>
                          @enderror
                        </div>

                        <div class="form-group mb-3">
                          <select class="form-control" name="category_id">
                            <option value=""> Select your category  </option>
                            @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }} </option>
                            @endforeach
                          </select>
                          @error('category_id')
                              <p class="text-danger">{{ $message }} </p>
                          @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="description"> Enter description </label>
                            <textarea name="description" class="form-control" id="description" rows="5"> {{ old('description') }} </textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                      </form>
                </div>  
                <hr>
            
          </div>
    </div> 
@endsection
