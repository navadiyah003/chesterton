<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Models\HomeProperties;
use App\Http\Controllers\Controller;
use File;



class HomePropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = HomeProperties::paginate(5);
        return view('admin.home.properties',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.index');
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
            'title'         => 'required',
            'place'         => 'required',
            'price'         => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);  
        if($request->hasfile('image'))
        {   
            $file = $request -> file('image');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            if($file->move('admin/uploads/home/',$filename))
            {
                $files[] = $filename;
            }                    
        }

        $about = HomeProperties::create([
            'title'         => $request -> title,
            'place'         => $request -> place,
            'price'         => $request -> price,
            'image'         => $filename,
        ]);
        return redirect('admin/home-properties')->with('success','Properties has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properties = HomeProperties::find($id);
       
        return view('admin.home.properties-edit',compact('properties'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'         => 'required',
            'place'         => 'required',
            'price'         => 'required',
            'image'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 
         $about = HomeProperties::find($id);
        if($request->hasfile('image'))
        {           
                    $destination='admin/uploads/home/'.$about->image;
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    $file = $request -> file('image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    if($file->move('admin/uploads/home/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
        else{
                $filename = $about->image;
        }

        $about->title       = $request -> title;
        $about->price       = $request -> price;
        $about->place       = $request -> place;
        $about->image       = $filename;

        $about->save();
        return redirect('admin/home-properties')->with('success','Properties has been Updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $property_id = $request->id;
        if($property_id != '')
        {
            $about = HomeProperties::find($property_id);
            $destination='admin/uploads/home/'.$about->image;
        
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            
            $about -> delete();

            return redirect('admin/home-properties')->with('success','Properties has been deleted successfully.'); 
        }
    
    }
    
}
