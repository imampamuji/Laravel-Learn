{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')
<article>
    <h1>{{ $post["Judul"] }}</h1>
    <h6>{{ $post["Author"] }}</h6>
    <p>{{ $post["body"] }}</p>
</article>

<a href="/blog">Back to posts</a>
@endsection