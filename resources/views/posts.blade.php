{{-- @dd($posts)  --}}

@extends('layouts.main')


@section('container')
    
        @foreach ($posts as $post)
        <Article class="mb-5">
            <a href="posts/{{ $post["slug"] }}">
                <h2>{{ $post["Judul"] }}</h2>
            </a>
            <h6>By: {{ $post["Author"] }}</h6>
            <p>{{ $post["body"] }}</p>
        </Article>
        @endforeach  
    
@endsection


