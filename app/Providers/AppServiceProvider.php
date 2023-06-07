<?php

namespace App\Providers;

use App\Models\Country;
use App\Models\RegionWiseCountry;
use App\Models\ServiceSlide;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $services = ServiceSlide::all();
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
        $fetchCountry = Country::all();
        view()->share(['fetchCountry' => $fetchCountry, 'expAsia' => $expAsia, 'expCaribbean' => $expCaribbean, 'expEurope' => $expEurope, 'expMena' => $expMena, 'services' => $services ]);
    }
}
