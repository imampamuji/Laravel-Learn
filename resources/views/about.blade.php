@extends('layouts.main')

@section('container')
    <H1>Halaman about</H1>
    <p>{{$name}}</p>
    <p>{{ $email }}</p>
    <img src="img/{{$image }}" alt="{{ $name }}" width="200px">
@endsection