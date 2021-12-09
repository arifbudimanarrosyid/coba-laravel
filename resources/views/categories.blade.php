@extends('layouts.main')

@section('container')
    <h1>Halaman Post Categories</h1>

    @foreach ($categories as $category)
        <ul>
            <li>
                <h4>
                    <a href="/categories/{{ $category->slug }}" class="text-decoration-none">
                        {{ $category->name}}
                    </a>
                </h4>

            </li>
        </ul>



    @endforeach
@endsection
