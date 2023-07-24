{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')
<article>
    <h1>{{ $post->title }}</h1>
    {{-- <h6>{{ $post["Author"] }}</h6> --}}
    {!! $post->body !!}
</article>

<a href="/blog">Back to posts</a>
@endsection