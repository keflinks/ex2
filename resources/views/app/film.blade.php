<a href="{{route('films.show', $film->id)}}">
    <div class="border rounded shadow-sm p-3">
        <div class="d-flex justify-content-between">
            <div>
                <div class="mb-1 link-warning h5 fw-semibold text-decoration-none">
                    <img src="{{asset('img/1.jpg')}}" alt="image">
                </div>
                <div class="mb-1 link-decoration-none">
                       <div class="link-warning h5 fw-semibold">
                           {{ $film->name }}
                       </div>
                </div>
                <div class="mb-1">
                    <a href="{{ route('films.index', ['location' => $film->category->id]) }}" class="link-dark text-decoration-none">
                        {{ $film->category->name }}|
                    </a>
                    <a href="{{ route('films.index', ['location' => $film->location->id]) }}" class="link-dark text-decoration-none">
                        {{ $film->location->name }}
                    </a>
                    <a href="{{ route('films.index', ['year' => $film->year->id]) }}" class="link-dark text-decoration-none">
                        {{ $film->year->name }}
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-2 ms-3">
            <div>
                <button type="button" class="btn btn-{{ $film->addtowatchlist ? 'danger':'success' }} btn-sm btn-active" value="{{ $film->id }}">
                    {!! $film->addtowatchlist ? '<i class="bi-x-lg"></i>':'<i class="bi-plus-square"></i>' !!} Add to watchlist
                </button>
            </div>
            <div>
                <a href="{{ route('films.show', $film->id) }}" class="link-secondary text-decoration-none">
                    <i class="bi-box-arrow-down"></i> {{ $film->downloaded }}
                </a>
            </div>
        </div>
    </div>
</a>
