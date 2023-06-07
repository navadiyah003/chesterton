<?php

namespace App\Http\Controllers;

use App\Models\GlobalNetwork;
use App\Models\GlobalNetworkIntegrated;
use App\Models\IntegratedService;
use Illuminate\Http\Request;

class GlobalNetworkController extends Controller
{
    public function index()
    {
        $globNet = GlobalNetwork::first();
        $globalNetwork = GlobalNetwork::paginate(6);
        $services = IntegratedService::latest()->paginate(4);
        return view('global-network', compact('services','globNet','globalNetwork'));
    }

    public function globalDetail($country)
    {
        // dump($country);
        $globNet = GlobalNetwork::where('banner_title', 'like', $country)->first();
        if ($globNet) {
            $globalNetwork = GlobalNetwork::paginate(6);
            $services = IntegratedService::latest()->get();
            $homeServData = [];
            foreach ($services as $value) {
                $homeServ = explode(',',$value->listService );
                $checkHomeServ = in_array($country,$homeServ);
                if ($checkHomeServ == true) {
                    array_push($homeServData, $value);
                }
            }
            // dd($homeServData);
            return view('global-network', compact('services','globNet','globalNetwork', 'homeServData'));
        } else {
            return redirect('/page_not_found');
        }
        
    }
}
