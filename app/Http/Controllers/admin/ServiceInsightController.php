<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\ServiceInsight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\ServiceSlide;

class ServiceInsightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input('insight_search')){
            $about = ServiceInsight::where('insights_title','like','%'.$request->insight_search.'%')
                                        ->orWhere('insights_content','like','%'.$request->insight_search.'%')
                                        ->paginate(6);

                $output = '';
                $data = [];
                foreach($about as $key=>$item)
                {  
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$about->firstItem() + $key.'</td>
                                 <td class="text-truncate" style="max-width: 150px;"> '.$item->insights_title.'</td>
                               
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->insights_content.'</td>
                                <td> '.'<img src="/admin/uploads/service/'.$item->insights_image.'" width="70px" height="70px" alt="Image">'.'</td>
                                                        
                                <td class="text-truncate" style="max-width: 150px;"> '.'<a class="btn btn-primary btn-md" href="service-insight/'.$item->id.'/edit/">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_about(this)" data-id="'.$item->id.'" id="about_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>
                                </tr>';   

                    $data[] = $item['insights_title'];                    
                }
                return response()->json([
                    'output' => $output, 
                    'data'   => $data,
                ]);
        } 
        else{
             $about = ServiceInsight::paginate(5);
        }
       
        return view('admin.service.insight.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = ServiceSlide::select('id','titles')->get();
        return view('admin.service.insight.create',compact('service'));
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
            'insights_title'        => 'required',
            'insights_content'      => 'required',
            'insights_image'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_title'         => 'required',
        ]);  
        if($request->hasfile('insights_image'))
        {   
            $file = $request -> file('insights_image');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            if($file->move('admin/uploads/service/',$filename))
            {
                $files[] = $filename;
            }                    
        }

        $about = ServiceInsight::create([
            'insights_title'        => $request -> insights_title,
            'insights_image'        => $filename,
            'insights_content'      => $request ->insights_content,
            'service_id'            => $request->service_title
        ]);
        return redirect('admin/service-insight')->with('success','Service Insight has been added successfully.');
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
        $about = ServiceInsight::find($id);
       
        return view('admin.service.insight.edit',compact('about','service'));
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
            'insights_title'        => 'required',
            'insights_content'      => 'required',
            'insights_image'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_title'         => 'required',
        ]);  
         $about = ServiceInsight::find($id);
        if($request->hasfile('insights_image'))
        {           
            $destination='admin/uploads/service/'.$about->insights_image;
                if(File::exists($destination))
                {
                        File::delete($destination);
                }
            $file = $request -> file('insights_image');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            if($file->move('admin/uploads/service/',$filename))
            {
                $files[] = $filename;
            }                    
        }
        else{
                $filename = $about->insights_image;
        }

        $about -> insights_title       = $request -> insights_title;
        $about -> insights_content     = $request -> insights_content;
        $about -> insights_image       = $filename;
        $about->service_id    = $request -> service_title;

        $about->save();
        return redirect('admin/service-insight')->with('success','Service Insight has been Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $insight_id = $request->id;
        if($insight_id != '')
        {
            $about = ServiceInsight::find($insight_id);
            $destination='admin/uploads/service/'.$about->image;
        
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            
            $about -> delete();

            return redirect('admin/service-insight')->with('success','Service Insight has been deleted successfully.'); 
        }
    
    }
}
