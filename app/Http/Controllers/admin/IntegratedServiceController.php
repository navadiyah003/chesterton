<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GlobalNetwork;
use Illuminate\Http\Request;
use App\Models\IntegratedService;
use Illuminate\Support\Facades\File;

class IntegratedServiceController extends Controller
{
    public function index(Request $request)
    {
        if($request->int_service_search){
                $integrated_service = IntegratedService::where('title','like','%'.$request->int_service_search.'%')
                                ->orWhere('description','like','%'.$request->int_service_search.'%')
                                ->orWhere('listService','like','%'.$request->int_service_search.'%')
                                ->paginate(6);

                $output = '';
                $data = [];
                foreach($integrated_service as $key=>$item)
                {   
                    $output .= '<tr '.'id='.$item->id.'>
                                <td class="text-center" style="width: 100px;"> '.$integrated_service->firstItem() + $key.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->title.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->description.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->listService.'</td>
                                <td style="width: 100px;"> '.'<img src="/admin/uploads/integrated-service/image/'.$item->image.'" width="70px" height="70px"
                                                                alt="Image">'.'</td>
                             
                                <td> '.'<a class="btn btn-primary btn-md" href="edit-integrated-service/'.$item->id.'">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_integrated_service(this)" data-id="'.$item->id.'" id="integrated_service_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>
                                </tr>';  

                    $data[] = $item['title'];                     
                }
                return response()->json([
                    'output' => $output, 
                    'data'  => $data,
                ]);
        } 
        else{
            $integrated_service = IntegratedService::paginate(6);
        }
        
        return view('admin.integrated-service.integrated-service-list',compact('integrated_service'));
    }

    public function create()
    {
        $globalNetwork = GlobalNetwork::get();
        return view('admin.integrated-service.create-integrated-service', compact('globalNetwork'));
    }

    public function store(Request $request)
    {
        $request->validate([
                'title'         => 'required',
                'description'   => 'required',
                'image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                // 'image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=256,height=338',
        ]);
        // dd($request->all());

        if($request->hasfile('image'))
        {   
                    $file = $request -> file('image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    // dd($filename);
                    if($file->move('admin/uploads/integrated-service/image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
        
        $integrated_service = IntegratedService::create([
                'title'       => $request -> title,
                'description' => $request -> description,
                'image'       => $filename,
                'listService' => implode(',',$request -> listService),
        ]);

        return redirect('admin/integrated-service-list')->with('success','Integrated Service has been added successfully.');
    }

    public function edit($id)
    {
        $integrated_service = IntegratedService::find($id);
        $globalNetwork = GlobalNetwork::get();
        return view('admin.integrated-service.edit-integrated-service',compact('integrated_service', 'globalNetwork'));
    }

    public function update(Request $request,$id)
    {
       $request->validate([
                'title'         => 'required',
                'description'   => 'required',
                'image'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=256,height=338',
        ]);
        //dd($request->all());
        $integrated_service = IntegratedService::find($id);
        if($request->hasfile('image'))
        {   
                    $destination='admin/uploads/integrated-service/image/'.$integrated_service->image;
                    
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    $file = $request -> file('image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    // dd($filename);
                    if($file->move('admin/uploads/integrated-service/image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        } 
        else{
            $filename = $integrated_service->image;
        }
        $integrated_service -> title        = $request -> title;
        $integrated_service -> description  = $request -> description;
        $integrated_service -> image        = $filename;
        $integrated_service -> listService  = "home";
        $integrated_service -> save();
        
        return redirect('admin/integrated-service-list')->with('success','Integrated Service has been updated successfully.');
    }

    public function destroy(Request $request)
    {
        $int_service_id = $request->id;
        if($int_service_id != '')
        {
            $int_service = IntegratedService::find($int_service_id);
          
            $destination='admin/uploads/integrated-service/image/'.$int_service->image;
        
            if(File::exists($destination))
            {
                File::delete($destination);
            }
          
            $int_service -> delete();

           return redirect('admin/integrated-service-list')->with('success','Integrated service has been deleted successfully.'); 
        }
    }
    
}