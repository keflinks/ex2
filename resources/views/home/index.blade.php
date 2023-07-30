@extends('layouts.app')
@section('title')
    @lang('app.appName')
@endsection
@section('content')
    @foreach($tagFilms as $tagFilm)
        <div class="border-top bg-black">
            <div class="container-xl py-4">
                <div class="h5 mb-3">
                    <a href="{{ route('films.index', ['tag' => $tagFilm['tag']->id]) }}" class="link-warning h4 text-decoration-none">
                        {{ $tagFilm['tag']->name }}
                    </a>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
                    @foreach($tagFilm['films'] as $film)
                        <div class="col">
                            @include('app.film')
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
@endsection