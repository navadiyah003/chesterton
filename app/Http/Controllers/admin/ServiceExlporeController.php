<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceExplore;
use App\Models\ServiceSlide;
use Illuminate\Support\Facades\File;

class ServiceExlporeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input('explore_search')){
            $about = ServiceExplore::where('title','like','%'.$request->explore_search.'%')
                                        ->orWhere('link','like','%'.$request->explore_search.'%')
                                        ->paginate(6);

                $output = '';
                $data = [];
                foreach($about as $key=>$item)
                {  
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$about->firstItem() + $key.'</td>
                                 <td class="text-truncate" style="max-width: 150px;"> '.$item->title.'</td>
                               
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->link.'</td>
                                <td> '.'<img src="/admin/uploads/service/'.$item->image.'" width="70px" height="70px" alt="Image">'.'</td>
                                                        
                                <td class="text-truncate" style="max-width: 150px;"> '.'<a class="btn btn-primary btn-md" href="service-explore/'.$item->id.'/edit/">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_about(this)" data-id="'.$item->id.'" id="about_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>
                                </tr>'; 
                                
                    $data[] = $item['title'];                      
                }
                return response()->json([
                    'output' => $output, 
                    'data'   => $data,
                ]);
        } 
        else{
             $about = ServiceExplore::paginate(5);
        }
       
        return view('admin.service.explore.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = ServiceSlide::select('id','titles')->get();
        return view('admin.service.explore.create',compact('service'));
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
            'link'          => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_title' => 'required',
        ]);  
        if($request->hasfile('image'))
        {   
            $file = $request -> file('image');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            if($file->move('admin/uploads/service/',$filename))
            {
                $files[] = $filename;
            }                    
        }

        $about = ServiceExplore::create([
            'title'         => $request -> title,
            'link'          => $request -> link,
            'image'         => $filename,
            'service_id'    => $request->service_title
        ]);
        return redirect('admin/service-explore')->with('success','Service Explore has been added successfully.');
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
        $service = ServiceSlide::select('id','titles')->get();
        $about = ServiceExplore::find($id);
       
        return view('admin.service.explore.edit',compact('about','service'));
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
            'link'          => 'required',
            'image'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_id'    => $request->service_title
        ]);
         $about = ServiceExplore::find($id);
        if($request->hasfile('image'))
        {           
            $destination='admin/uploads/service/'.$about->image;
                if(File::exists($destination))
                {
                        File::delete($destination);
                }
            $file = $request -> file('image');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            if($file->move('admin/uploads/service/',$filename))
            {
                $files[] = $filename;
            }                    
        }
        else{
            $filename = $about->image;
        }
        $about -> title      = $request -> title;
        $about -> link       = $request -> link;
        $about -> image      = $filename;
        $about->service_id    = $request -> service_title;

        $about->save();
        return redirect('admin/service-explore')->with('success','Service Explore has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $explore_id = $request->id;
        if($explore_id != '')
        {
            $about = ServiceExplore::find($explore_id);
            $destination='admin/uploads/service/'.$about->image;
        
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            
            $about -> delete();

            return redirect('admin/service-explore')->with('success','Service Explore has been deleted successfully.'); 
        }
    
    }
}
