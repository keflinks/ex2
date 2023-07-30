<form action="{{ url()->current() }}">
    <div class="mb-3">
        <label for="categories" class="form-label fw-semibold"></label>
        <select class="form-select form-select-sm" name="categories[]" id="categories">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $f_category ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="locations" class="form-label fw-semibold"></label>
        <select class="form-select form-select-sm" name="locations[]" id="locations" >
            @foreach($locations as $location)
                <option value="{{ $location->id }}" {{ $location->id == $f_location ? 'selected' : '' }}>{{ $location->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="years" class="form-label fw-semibold"></label>
        <select class="form-select form-select-sm" name="years[]" id="years" >
            @foreach($years as $year)
                <option value="{{ $year->id }}" {{$year->id == $f_year ? 'selected' : '' }}>{{ $year->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="language" class="form-label fw-semibold"></label>
        <select class="form-select form-select-sm" name="language" id="language">
            @foreach($languages as $language)
                <option value="{{ $language->id }}" {{ $language->id == $f_language ? 'selected' : '' }}>{{ $language->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="genre" class="form-label fw-semibold"></label>
        <select class="form-select form-select-sm" name="genre" id="genre">
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}" {{ $genre->id == $f_genre ? 'selected' : '' }}>{{ $genre->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="sort" class="form-label fw-semibold"></label>
        <select class="form-select form-select-sm" name="sort" id="sort">
            <option value="new-to-old" {{ 'new-to-old' == $f_sort ? 'selected' : '' }}>New to old</option>
            <option value="old-to-new" {{ 'old-to-new' == $f_sort ? 'selected' : '' }}>Old to new</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="perPage" class="form-label fw-semibold"></label>
        <select class="form-select form-select-sm" name="perPage" id="perPage">
            @foreach([15, 30, 60, 120] as $perPage)
                <option value="{{ $perPage }}" {{ $perPage == $f_perPage ? 'selected' : '' }}>{{ $perPage }}</option>
            @endforeach
        </select>
    </div>
    <div class="row g-3">
        <div class="col">
            <button type="submit" class="btn btn-danger btn-sm w-100">
                <i class="bi-funnel"></i>
            </button>
        </div>
    </div>
</form>