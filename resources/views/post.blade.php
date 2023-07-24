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


{{-- 
 Post::create([
    "title"=> "Judul Post Ketiga",
    "slug"=> "judul-post-3",
    "excerpt"=> "3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem doloremque, quisquam doloribus tempora, reprehenderit at aliquid dolor quasi molestias voluptate corrupti nulla sequi a aliquam maxime atque impedit optio illo quos odit fuga laudantium numquam! Incidunt",
    "body"=>"<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem doloremque, quisquam doloribus tempora, reprehenderit at aliquid dolor quasi molestias voluptate corrupti nulla sequi a aliquam maxime atque impedit optio illo quos.</p><p>odit fuga laudantium numquam! Incidunt odio dolor consequuntur molestias ex ipsa magnam eveniet commodi ab recusandae vero, earum eaque esse maxime omnis ad, ducimus labore accusamus. Atque alias magni, accusamus iste soluta modi veritatis corporis ullam doloremque reprehenderit ipsa quam. Quas nobis minima quis repellat eius inventore facere natus asperiores! Omnis, repellat cum nobis accusamus laboriosam, ipsa esse temporibus possimus quidem sint obcaecati, ullam alias quo. Doloremque consequuntur illo sapiente saepe</p><p>eaque perspiciatis dicta maiores explicabo, id laborum nesciunt quod deleniti odio officia, eveniet eius optio perferendis? Error, maxime corrupti! Blanditiis labore cum voluptates alias quam earum adipisci ab unde distinctio reprehenderit dolorum, aperiam, quos quis error harum enim sint officiis tempora! Iste numquam dicta voluptate? Beatae, quis!</p>"
]);  --}}
