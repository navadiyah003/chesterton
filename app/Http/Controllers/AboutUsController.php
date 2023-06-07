<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\ChestertonTeam;

class AboutUsController extends Controller
{
    public function index()
    {
        $about_us = AboutUs::first();
        $our_team = ChestertonTeam::get();
      
        return view('about-us',compact('about_us','our_team'));
    }
}
