<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\HomeAbout;
use App\Models\HomeMainSlide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = HomeAbout::paginate(5);
        return view('admin.home.about',compact('about'));
    }

    public function getBanner(){
        $about = HomeMainSlide::paginate(5);
        return view('admin.home.main-list',compact('about'));
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
            'title'        => 'required',
            'description'  => 'required',
            'content'      => 'required',
            'image'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=921,height=580',
         ],
        [
            'image.dimensions'          => 'please upload image of dimensions 921 * 580',
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

        $about = HomeAbout::create([
            'title'             => $request -> title,
            'description'       => $request -> description,
            'content'           => $request -> content,
            'about_chestertons' => $request -> about_chestertons,
            'image'             => $filename,
            'link'              => $request -> link
        ]);
        return redirect('admin/home-about')->with('success','About has been added successfully.');
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
        $about = HomeAbout::find($id);
        return view('admin.home.about-edit',compact('about'));
    }

    public function slideEdit($id)
    {
        $about = HomeMainSlide::find($id);
        return view('admin.home.main-edit',compact('about'));
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
            'description'   => 'required',
            'content'       => 'required',
            'image'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=921,height=580',
        ],
        [
            'image.dimensions'          => 'please upload image of dimensions 921 * 580',
        ]); 
         $about = HomeAbout::find($id);
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

        $about->title               = $request -> title;
        $about->description         = $request -> description;
        $about->content             = $request -> content;
        $about->image               = $filename;
        $about->link                = $request->link;
        $about->about_chestertons   = $request -> about_chestertons;
        $about->save();
        return redirect('admin/home-about')->with('success','About has been Updated successfully.');

    }

    public function updateSlide(Request $request, $id){
        $this->validate($request, [
            'path' => 'required|file|mimetypes:video/mp4',
        ]);
        $about = HomeMainSlide::find($id);
        $destination='admin/uploads/videos/'.$about->path;
        if(File::exists($destination))
        {
                File::delete($destination);
            }
        $file = $request -> file('path');
        $extension = $file -> getClientOriginalExtension();
        $filename = time().'.'.$extension;
        if($file->move('admin/uploads/videos/',$filename))
        {
            $files[] = $filename;
        }          
      
            $about->path   = $filename;
            $about->save();
 
            return redirect('admin/home-about')->with('success','About has been deleted successfully.');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
