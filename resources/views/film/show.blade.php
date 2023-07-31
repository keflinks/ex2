@extends('layouts/app')

@section('content')
    <div class=" p-3">
        <div class="row justify-content-center">
            <div class="mt-5 col-lg-4 col-md-6 ">
                <a href="{{ route('films.index', ['film' => $film->image]) }}" class="link-warning h5 fw-semibold text-decoration-none">
                    <img src="{{asset('img/1.jpg')}}" alt="image" class="w-75">
                </a>
            </div>
            <div class="col-lg-5 col-md-4">
                <div class="mb-1">
                    <a href="{{ route('films.index', ['film' => $film->name]) }}" class="link-warning h1 fw-semibold text-decoration-none">
                        {{ $film->name }}
                    </a>
                </div>
                <div class="mb-3 h3">
                    <div class="link-light text-decoration-none">
                        Category:<span class="link-danger ms-4">{{ $film->category->name }}</span>
                    </div>
                </div>
                <div class="mb-3 h3">
                    <div class="link-light text-decoration-none">
                        Genre:<span class="link-danger ms-4">{{ $film->genre->name }}</span>
                    </div>
                </div>
                <div class="mb-3 h3">
                    <div class="link-light text-decoration-none">
                        Year:<span class="link-danger ms-4">{{ $film->year->name }}</span>
                    </div>
                </div>
                <div class="mb-3 h3">
                    <div class="link-light text-decoration-none">
                        Location:<span class="link-danger ms-4">{{ $film->location->name }}</span>
                    </div>
                </div>
                <div class="mb-3 h3">
                    <div class="link-light text-decoration-none">
                        Language:<span class="link-danger ms-4">{{ $film->language->name }}</span>
                    </div>
                </div>
                <div class="mb-3 h3">
                    <div class="link-light text-decoration-none">
                        Rating:<span class="link-danger ms-4">{{ $film->rating->name }} <i class="text-warning bi-star-fill"></i></span>
                    </div>
                </div>
                <div class="mb-3 h3">
                    <div class="link-light text-decoration-none">
                        Actor:<span class="link-danger ms-4">{{ $film->actor->name }}</span>
                    </div>
                </div>
                <div class="mb-3 h3">
                    <div class="link-light text-decoration-none">
                        Decsription:<span class="link-danger ms-4">{{ $film->description }}</span>
                    </div>
                </div>
                <div class="mb-3 h3">
                    <div class="link-light text-decoration-none">
                        Updated at:<span class="link-danger ms-4">{{ $film->updated_at}}</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="h3 text-danger">
                        <i class="text-success bi-box-arrow-down"></i> <span class="text-light">{{ $film->downloaded }}</span>
                    </div>
                </div>
                <div class="mt-5">
                    <button type="button" class="btn btn-info fw-bold"><i class="text-light bi bi-play-fill">Watch</i></button>
                </div>
            </div>
        </div>

    </div>
@endsection