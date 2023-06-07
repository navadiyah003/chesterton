<?php

namespace App\Http\Controllers;

use App\Models\CareerDetail;
use App\Models\CareerDescriptions;
use App\Models\Applicant;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careerdetail = CareerDescriptions::first();
        return view('career', compact('careerdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $applicant = new Applicant;
        if($request->hasfile('cv'))
        {   
            $request->validate([
                'cv' => 'required|mimes:pdf|max:10000',
            ]);
            $file = $request -> file('cv');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('admin/uploads/cv/',$filename);
            $applicant->cv = $filename;
        }

        $applicant->fullname = $request->fullname;
        $applicant->email = $request->email;
        $applicant->message = $request->message;
        $applicant->save();
        return redirect('/career')->with('form-submit', "Application Submitted Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(CareerDetail $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(CareerDetail $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CareerDetail $career)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareerDetail $career)
    {
        //
    }
}