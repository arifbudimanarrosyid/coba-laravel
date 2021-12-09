@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <article class="mb-5">
            <h4>{{ $post->title }}</h4>
            <p>by <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </p>
            {!! $post->body !!}
        </article>
    </article>
    <a href="/blog">Back</a>
    {{-- <a href="/blog">
        <img src="https://img.icons8.com/fluency/50/000000/back.png"/>
    </a> --}}
@endsection
