@extends('layouts.app')
@section('title')
    @lang('app.appName')
@endsection
@section('content')
    <div class="">
        <img src="{{asset('img/2.jpeg')}}" alt="image" class="w-100">
    </div>
    <div class="text-center text-warning h1">
        The Best Movies Are Here.
    </div>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('img/3.jpeg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('img/4.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/5.png')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
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