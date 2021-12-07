@extends('layouts.main')
@section('container')
    {{-- <h1>Halaman Blog</h1> --}}
    @foreach ($posts as $post)
        <article class="mb-5">
            <h4>
                <a href="/posts/{{ $post["slug"] }}">
                    {{ $post['title'] }}
                </a>
            </h4>
            <h5>by {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
