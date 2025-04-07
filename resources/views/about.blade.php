@extends('layouts.master')

@section('content')
    <h3> About page </h3>

    @foreach ($datas as $data)
        <p> {{ $data }} </p>
    @endforeach
@endsection