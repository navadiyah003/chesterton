<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\ServiceValuation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\ServiceSlide;

class ServiceValutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if($request->input('valuation_search')){
            $about = ServiceValuation::where('valution_content','like','%'.$request->valuation_search.'%')
                                        ->paginate(6);

                $output = '';
                $data = [];
                foreach($about as $key=>$item)
                {  
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$about->firstItem() + $key.'</td>
                               
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->valution_content.'</td>
                                  <td> '.'<img src="/admin/uploads/service/'.$item->valution_image.'" width="70px" height="70px"
                                                                alt="Image">'.'</td>
                                                        
                                <td> '.'<a class="btn btn-primary btn-md" href="service-valution/'.$item->id.'/edit">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_about(this)" data-id="'.$item->id.'" id="about_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>
                                </tr>';  
                                
                    $data[] = $item['valution_content'];                    
                }
                return response()->json([
                    'output' => $output, 
                    'data'   => $data,
                ]);
        } 
        else{
             $about = ServiceValuation::paginate(5);
        }
       
        return view('admin.service.valution.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = ServiceSlide::select('id','titles')->get();
        return view('admin.service.valution.create',compact('service'));
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
            'valution_content'       => 'required',
            'valution_image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_title'         => 'required',
        ]);  
        if($request->hasfile('valution_image'))
        {   
            $file = $request -> file('valution_image');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            if($file->move('admin/uploads/service/',$filename))
            {
                $files[] = $filename;
            }                    
        }
        $about = ServiceValuation::create([
            'valution_content'       => $request -> valution_content,
            'valution_image'         => $filename,
            'service_id'             => $request -> service_title,
        ]);
        return redirect('admin/service-valution')->with('success','Valution has been added successfully.');
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
        $about = ServiceValuation::find($id);
       
        return view('admin.service.valution.edit',compact('about','service'));
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
            'valution_content'       => 'required',
            'valution_image'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_title'     => 'required'
        ]);
         $about = ServiceValuation::find($id);
        if($request->hasfile('valution_image'))
        {           
            $destination='admin/uploads/service/'.$about->valution_image;
                if(File::exists($destination))
                {
                        File::delete($destination);
                }
            $file = $request -> file('valution_image');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            if($file->move('admin/uploads/service/',$filename))
            {
                $files[] = $filename;
            }                    
        }
        else{
                $filename = $about->valution_image;
        }

        $about->valution_content       = $request -> valution_content;
        $about->valution_image         = $filename;
        $about->service_id    = $request -> service_title;

        $about->save();
        return redirect('admin/service-valution')->with('success','Valution has been Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $valuation_id = $request->id;
        if($valuation_id != '')
        {
            $about = ServiceValuation::find($valuation_id);
            $destination='admin/uploads/service/'.$about->image;
        
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            
            $about -> delete();

            return redirect('admin/service-valution')->with('success','Valution has been deleted successfully.'); 
        }
    
    }
}
