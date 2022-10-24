@extends('layouts.main')

@section('container')

<article>
    <h2 class="mb-5">{{ $post->title }}</h2>
    <h5>{{ $post->author}}</h5>
    {!! $post->body !!}
</article>


<a class="btn btn-info" href="/blog" role="button">Back to Posts</a>
@endsection