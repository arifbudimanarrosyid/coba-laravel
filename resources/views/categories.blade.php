@extends('layouts.main')

@section('container')
    <h1>Halaman Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 p-2">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                            alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0,0,0.5)">
                                <a href="/categories/{{ $category->slug }}" class="text-decoration-none text-light">{{ $category->name }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($categories as $category)
        <ul>
            <li>
                <h4>
                    <a href="/categories/{{ $category->slug }}" class="text-decoration-none">
                        {{ $category->name}}
                    </a>
                </h4>

            </li>
        </ul>
    @endforeach --}}
@endsection
