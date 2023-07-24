{{-- @dd($posts)  --}}

@extends('layouts.main')


@section('container')
    
        @foreach ($posts as $post)
        <Article class="mb-5">
            <a href="posts/{{ $post->id }}">
                <h2>{{ $post->title }}</h2>
            </a>
            {{-- <h6>By: {{ $post["Author"] }}</h6> --}}
            <p>{{ $post->excerpt }}</p>
        </Article>
        @endforeach  
    
@endsection


