<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $countries = Country::get();
        if ($request->country) {
            $properties = Property::where('country', 'Like', $request->country)->latest()->paginate(10);
        } else {
            $properties = Property::latest()->paginate(10);
        }
        
        // dd($countries);
        return view('admin.property.property-list', compact('properties', 'countries'));
    }

    public function create()
    {
        return view('admin.property.create-property');
    }

    public function store(Request $request)
    {
        $request->validate([
            'property_title'        => 'required',
            'property_type'         => 'required',
            'short_description'     => 'required',
            'description'           => 'required',
            'property_price'        => 'required',
            'bedrooms'              => 'required|numeric',
            'bathrooms'             => 'required|numeric',
            'property_area'         => 'required|numeric',
            'street'                => 'required',
            'location'              => 'required',
            'country'               => 'required',
            'property_image'        => 'required|image',
            
        ]);
    }

    public function changeStatus(Request $request)
    {
        $property = Property::find($request->property_id);
        $property->feature = $request->status;
        $property->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
}
