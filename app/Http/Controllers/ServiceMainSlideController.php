<?php

namespace App\Http\Controllers;

use App\Models\ServiceMainSlide;
use Illuminate\Http\Request;

class ServiceMainSlideController extends Controller
{
    public function index()
    {
        $service_main = ServiceMainSlide::first();
        return view('services-detail', compact('service_main'));
    }
}
