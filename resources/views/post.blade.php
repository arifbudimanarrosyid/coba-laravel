@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <article class="mb-5">
            <h2>{{ $post['title'] }}</h2>
            <h5>by {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    </article>
    <a href="/blog">Back</a>
    {{-- <a href="/blog">
        <img src="https://img.icons8.com/fluency/50/000000/back.png"/>
    </a> --}}
@endsection
