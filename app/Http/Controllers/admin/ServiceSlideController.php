<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicePart;
use App\Models\ServiceSlide;
use Illuminate\Support\Facades\File;

class ServiceSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input('offer_search')){
            $about = ServicePart::where('offer_title','like','%'.$request->offer_search.'%')
                                        ->orWhere('offer_content','like','%'.$request->offer_search.'%')
                                        ->paginate(6);

                $output = '';
                $data = [];
                foreach($about as $key=>$item)
                {  
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$about->firstItem() + $key.'</td>
                                 <td class="text-truncate" style="max-width: 150px;"> '.$item->offer_title.'</td>
                               
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->offer_content.'</td>
                                                        
                                <td> '.'<a class="btn btn-primary btn-md" href="service-main/'.$item->id.'/edit">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_about(this)" data-id="'.$item->id.'" id="about_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>
                                </tr>';  
                                
                    $data[] = $item['offer_title'];                     
                }
                return response()->json([
                    'output' => $output, 
                    'data'  => $data,
                ]);
        } 
        else{
            $about = ServicePart::paginate(6);
        }
        
        return view('admin.service.slide-list',compact('about'));
    }
    
    public function serviceIndex(){
        $about = ServiceSlide::paginate(5);
        return view('admin.service.main.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = ServiceSlide::select('id','titles')->get();
        return view('admin.service.main', compact('service'));
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
            'offer_title'       => 'required',
            'offer_content'     => 'required',
            'service_title'     => 'required'
        ]);  
       
        $about = ServicePart::create([
            'offer_title'       => $request -> offer_title,
            'offer_content'     => $request -> offer_content,
            'service_id'     => $request -> service_title,
        ]);
        return redirect('admin/service-main')->with('success','Offer has been add successfully.'); 
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
        $about = ServicePart::find($id);        
        return view('admin.service.edit-slide',compact('about','service'));
    }
    public function createService(Request $request)
    {        
        return view('admin.service.main.create');
    }

    public function editService($id)
    {
        $about = ServiceSlide::find($id);
       
        return view('admin.service.main.edit',compact('about'));
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
            'offer_title'      => 'required',
            'offer_content'    => 'required',
            'service_title'     => 'required'
        ]);
         $about = ServicePart::find($id);

        $about->offer_title      = $request -> offer_title;
        $about->offer_content    = $request -> offer_content;
        $about->service_id    = $request -> service_title;
        $about->save();
        return redirect('admin/service-main')->with('success','Offer has been Updated successfully.'); 
    }
    public function storeMainService(Request $request){
        if($request->hasfile('main_image'))
        {           
            
            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension();
            $file_main = time().'.'.$extension;
            if($file->move('admin/uploads/service/',$file_main))
            {
                $files[] = $file_main;
            }                    
        }        
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            if($file->move('admin/uploads/service/',$filename))
            {
                $files[] = $filename;
            }
        }
        $about = [];
        $about['titles']          = $request -> title;
        $about['description']     = $request -> description;
        $about['content']         = $request -> content;
        $about['main_image']      = $file_main;
        $about['image']           = $filename;


        ServiceSlide::create($about);
        return redirect('admin/service-list')->with('success','Service Main has been created successfully.');
    }

    public function updateService(Request $request ,$id)
    {
     
         $about = ServiceSlide::find($id);
        if($request->hasfile('main_image'))
        {           
            $destination='admin/uploads/service/'.$about->main_image;
                if(File::exists($destination))
                {
                        File::delete($destination);
                }
            $file = $request -> file('main_image');
            $extension = $file -> getClientOriginalExtension();
            $file_main = time().'.'.$extension;
            if($file->move('admin/uploads/service/',$file_main))
            {
                $files[] = $file_main;
            }                    
        }
        else{
            $file_main = $about->main_image;
        }
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

        $about->titles          = $request -> title;
        $about->description     = $request -> description;
        $about->content         = $request -> content;
        $about->main_image      = $file_main;
        $about->image           = $filename;


        $about->save();
        return redirect('admin/service-list')->with('success','Service Main has been Updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($request->id);
        $offer_id = $request->id;
        if($offer_id != '')
        {
            $about = ServicePart::find($offer_id);
        
            $about -> delete();

            return redirect('admin/service-main')->with('success','Service Offer has been deleted successfully.'); 
        }
    
    }
}
