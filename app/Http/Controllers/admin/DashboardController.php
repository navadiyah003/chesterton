<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Regions;
use App\Models\RegionWiseCountry;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function megaMenu(Request $request)
    {
        $countries = Country::all();
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
        return view('admin.mega-menu.mega-menu-list', compact('countries', 'regionCountries','expAsia','expCaribbean','expEurope','expMena'));
    }

    public function changeStatus(Request $request)
    {
        $megaMenu = Country::find($request->megaMenu_id);
        $megaMenu->status = $request->status;
        $megaMenu->save();

        return response()->json(['success' => 'Status change successfully.']);
    }

    public function addMegaMenu(Request $request)
    {
        // dd($request->all());

        $getAllRegion = RegionWiseCountry::all();
        if (count($getAllRegion) > 0) {
            $addCountries = RegionWiseCountry::where('id',$request->updateValue)->update([
                'asia' => $request->asiaListService ? json_encode($request->asiaListService): [],
                'caribbean' => $request->caribbeanListService ? json_encode($request->caribbeanListService) : [],
                'europe' => $request->europeListService ? json_encode($request->europeListService) : [],
                'mena' =>  $request->menaListService ? json_encode($request->menaListService,true) : [],
            ]);
        } else {
            $addCountries = RegionWiseCountry::create([
                // 'asia' => json_decode (json_encode ($request->asiaListService), FALSE)
                'asia' => json_encode($request->asiaListService),
                'caribbean' => json_encode($request->caribbeanListService),
                'europe' => json_encode($request->europeListService),
                'mena' => json_encode($request->menaListService,true),
                // 'caribbean' => implode(",",$request -> caribbeanListService),
                // 'europe' => implode(",",$request -> europeListService),
                // 'mena' => implode(",",$request -> menaListService),
            ]);
        }
        

        return redirect('admin/mega-menu-list')->with('success','Countries has been added successfully.');
    }
}
