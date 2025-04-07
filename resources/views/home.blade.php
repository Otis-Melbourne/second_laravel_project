<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home </title>
</head>
<body>

    <h2> this is home page </h2>
    
</body>
</html>
>>>>>>> c45eb2d42a368a9788516234da0499eae982e05c
