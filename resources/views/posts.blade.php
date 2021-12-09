@extends('layouts.main')
@section('container')
    <h1>{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3 bg-dark border">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h5 class="card-title ">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-light">{{ $posts[0]->title }}
                    </a>
                </h5>
                <p>
                    <small class="text-light">
                        by <a href="/authors/{{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}
                        </a> in <a href="/categories/{{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}
                        </a>
                        <small>{{ $posts[0]->created_at->diffForHumans() }}</small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post found.</p>
    @endif

    <div class="container text-light">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card bg-dark border">
                        <div class="position-absolute p-2" style="background-color: rgba(0,0,0,0.5)">
                            <a href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none text-light">{{ $post->category->name }}</a>
                        </div>
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                            alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            {{-- <small>{{ $posts[0]->created_at->diffForHumans() }}</small> --}}
                            <p>by
                                <a href="/authors/{{ $post->author->username }}"
                                    class="text-decoration-none">{{ $post->author->name }}</a>
                                    <small>{{ $posts[0]->created_at->diffForHumans() }}</small>
                                {{-- <a href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none">{{ $post->category->name }}</a> --}}
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($posts->skip(1) as $post)
        <article class="mb-5 border-bottom pb-4">
            <h4>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                    {{ $post->title }}
                </a>
            </h4>
            <p>by <a href="/authors/{{ $post->author->username }}"
                    class="text-decoration-none">{{ $post->author->name }}</a> in
                <a href="/categories/{{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a>
            </p>
            <h5>by {{ $post['author'] }}</h5>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach --}}
@endsection
