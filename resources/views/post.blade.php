@extends('layouts.main')

@section('container')

<article>
    <h2>{{ $post->title }}</h2>

    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
        in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>

<a class="btn btn-info mt-5" href="/blog" role="button">Back to Posts</a>
@endsection