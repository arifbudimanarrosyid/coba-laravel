@extends('layouts.main')
@section('container')
    <h1>{{ $title }}</h1>
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h4>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                    {{ $post->title}}
                </a>
            </h4>
            <p>by <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </p>
            {{-- <h5>by {{ $post['author'] }}</h5> --}}
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach
@endsection
