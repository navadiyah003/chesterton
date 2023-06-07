<?php

namespace App\Http\Controllers;

use App\Models\PopularCitySearch;
use App\Models\Story;
use Illuminate\Http\Request;

class PopularCitySearchController extends Controller
{
    public function index()
    {
        $stories = Story::latest()->paginate(3);
        // dd($stories);
        $popularCities = PopularCitySearch::first();
        // dd(explode(", ",$popularCities->banner_image));
        return view('popular-city-search', compact('stories', 'popularCities'));
    }
}
