<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\GlobalNetwork;
use App\Models\IntegratedService;
use Illuminate\Http\Request;
use App\Models\HomeAbout;
use App\Models\HomeMainSlide;
use App\Models\HomeProperties;
use App\Models\Property;
use App\Models\RegionWiseCountry;
use App\Models\ServicePart;
use App\Models\ServiceSlide;
use App\Models\ServiceValuation;
use App\Models\ServiceInsight;
use App\Models\ServiceExplore;
use App\Models\ServiceConsultants;


class HomeController extends Controller
{
    public function index()
    {
        
        $services = IntegratedService::latest()->get();
        $homeServData = [];
        foreach ($services as $value) {
            $homeServ = explode(',',$value->listService );
            $checkHomeServ = in_array("home",$homeServ);
            if ($checkHomeServ == true) {
                array_push($homeServData, $value);
            }
        }
        $about = HomeAbout::first();
        $slide = HomeMainSlide::get();
        $properties = Property::where('feature','Like', 1)->get();
        $globalNetwork = GlobalNetwork::all();
        $regionCountries = RegionWiseCountry::latest()->first();
        if (isset($regionCountries->asia)) {
            $expAsia = json_decode($regionCountries->asia);
        }else {
            $expAsia = [];
        }
        if (isset($regionCountries->caribbean)) {
            $expCaribbean = json_decode($regionCountries->caribbean);
        }else {
            $expCaribbean = [];
        }
        if (isset($regionCountries->europe)) {
            $expEurope = json_decode($regionCountries->europe);
        }else {
            $expEurope = [];
        }
        if (isset($regionCountries->mena)) {
            $expMena = json_decode($regionCountries->mena);
        }else {
            $expMena = [];
        }
        // dd($fetchRegionCountry->asia);
        $fetchCountry = Country::all();
        return view('home.index', compact('services','about','slide','properties','globalNetwork', 'homeServData','fetchCountry','expAsia','expCaribbean','expEurope','expMena'));
    }

    public function service()
    {
        $service_main = ServiceSlide::first();
        $service_part = ServicePart::get();
        $service_valution = ServiceValuation::get();
        $service_insight = ServiceInsight::get();
        $service_explore = ServiceExplore::get();
        $service_consultants = ServiceConsultants::get();
        
        return view('services-detail',compact('service_main','service_part', 'service_valution','service_insight','service_explore', 'service_consultants'));
    }

    public function serviceDetail($slug)
    {
        $service_main = ServiceSlide::first();
        $service_part = ServicePart::get();
        $service_valution = ServiceValuation::get();
        $service_insight = ServiceInsight::get();
        $service_explore = ServiceExplore::get();
        $service_consultants = ServiceConsultants::get();
        
        return view('services-detail',compact('service_main','service_part', 'service_valution','service_insight','service_explore', 'service_consultants'));
    }

}
