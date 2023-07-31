<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use App\Models\Language;
use App\Models\Location;
use App\Models\Tag;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Homecontroller extends Controller
{
    public function index()
{
    $tags = Tag::withCount('films')
        ->orderBy('id')
        ->take(9)
        ->get();

    $tagFilms = [];
    foreach ($tags as $tag) {
        $tagFilms[] = [
            'tag' => $tag,
            'films' => Film::where('tag_id', $tag->id)
                ->with('tag','category', 'location', 'year','genre', 'language','actor')
                ->take(12)
                ->get(),
        ];
    }


    return view('home.index')
        ->with([
            'tagFilms' => $tagFilms,
        ]);
}






    public function locale($locale)
    {
        if ($locale == 'en') {
            session()->put('locale', 'en');
            return redirect()->back();
        } elseif ($locale == 'tm') {
            session()->put('locale', 'tm');
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}