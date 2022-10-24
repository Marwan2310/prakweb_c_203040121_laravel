@extends('layouts.main')

@section('container')

<article>
    <h2>{{ $post->title }}</h2>

    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    {!! $post->body !!}
</article>

<a class="btn btn-info" href="/blog" role="button">Back to Posts</a>
@endsection