<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Language;
use App\Models\Location;
use App\Models\Year;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'category' => 'nullable|array|min:0',
            'categories.*' => 'nullable|integer|min:1',
            'location' => 'nullable|integer|min:0',
            'year' => 'nullable|integer|min:0',
            'language' => 'nullable|integer|min:0',
            'genre' => 'nullable|integer|min:0',
            'sort' => 'nullable|string|in:new-to-old,old-to-new',
            'page' => 'nullable|integer|min:1',
            'perPage' => 'nullable|integer|in:15,30,60,120',
            'addtowatchlist' => 'nullable|boolean',
        ]);

        $f_categories = $request->has('categories') ? $request->categories : [];
        $f_location = $request->has('location') ? $request->location : 0;
        $f_year = $request->has('year') ? $request->year : 0;
        $f_language = $request->has('language') ? $request->language : 0;
        $f_genre = $request->has('genre') ? $request->genre : 0;
        $f_sort = $request->has('sort') ? $request->sort : null;
        $f_page = $request->has('page') ? $request->page : 1;
        $f_perPage = $request->has('perPage') ? $request->perPage : 15;


        $films = Film::when($f_categories, function ($query) use ($f_categories) {
            $query->whereIn('category_id', $f_categories);
        })
            ->when($f_location, function ($query) use ($f_location) {
                $query->whereIn('location_id', $f_location);
            })
            ->when($f_year, function ($query) use ($f_year) {
                $query->whereIn('year_id', $f_year);
            })
            ->when($f_language, function ($query) use ($f_language) {
                $query->where('language_id', $f_language);
            })
            ->when($f_genre, function ($query) use ($f_genre) {
                $query->where('genre_id', $f_genre);
            })

            ->with('category', 'location', 'year', 'language','genre')
            ->when(isset($f_sort), function ($query) use ($f_sort) {
                if ($f_sort == 'old-to-new') {
                    $query->orderBy('id');
                } else {
                    $query->orderBy('id', 'desc');
                }
            }, function ($query) {
                $query->orderBy('id', 'desc');
            })
            ->paginate($f_perPage, ['*'], 'page', $f_page)
            ->withQueryString();

        $categories = Category::orderBy('name')
            ->get();
        $locations = Location::orderBy('name')
            ->get();
        $years = Year::orderBy('name')
            ->get();
        $languages = Language::orderBy('name')
            ->get();
        $genres = Genre::orderBy('name')
            ->get();


        return view('film.index')
            ->with([
                'films' => $films,
                'categories' => $categories,
                'locations' => $locations,
                'years' => $years,
                'languages' => $languages,
                'genres' => $genres,
                'f_categories' => $f_categories,
                'f_location' => $f_location,
                'f_year' => $f_year,
                'f_language' => $f_language,
                'f_genre' => $f_genre,
                'f_sort' => $f_sort,
                'f_perPage' => $f_perPage,
            ]);
    }
    public function show($id)
    {
        $film = Film::find($id);


        return view('film.show',
            ['film' => $film]);
    }
}
