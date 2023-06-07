<?php

namespace App\Http\Controllers;

use App\Models\GlobalNetwork;
use App\Models\GlobalNetworkIntegrated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GlobalNetworkIntegratedController extends Controller
{
    public function index(Request $request)
    {
        if($request->global_int_service_search){
                $integrated_service = GlobalNetworkIntegrated::where('global_network_integrate_title','like','%'.$request->global_int_service_search.'%')->orWhere('global_network_integrate_description','like','%'.$request->global_int_service_search.'%')->paginate(6);

                $output = '';
                //dd($integrated_service->firstItem());
                foreach($integrated_service as $key=>$item)
                {   
                    $output .= '<tr '.'id='.$item->id.'>
                                <td class="text-center" style="width: 100px;"> '.$integrated_service->firstItem() + $key.'</td>
                                <td class="text-truncate" style="max-width: 10px;"> '.$item->global_network_country.'</td>
                                <td class="text-truncate" style="max-width: 10px;"> '.$item->global_network_integrate_title.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->global_network_integrate_description.'</td>
                                <td style="width: 100px;"> '.'<img src="/admin/uploads/global-network-integrate/image/'.$item->global_network_integrate_image.'" width="70px" height="70px" alt="Image">'.'</td>                             
                                <td class="text-truncate" style="max-width: 150px;"> '.'<a class="btn btn-primary btn-md" href="edit-integrated-service/'.$item->id.'">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_integrated_service(this)" data-id="'.$item->id.'" id="integrated_service_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>
                                </tr>';                        
                }
                return response()->json([
                    'output' => $output, 
                ]);
        } 
        else{
            $global_integrated_service = GlobalNetworkIntegrated::paginate(6);
        }
        
        return view('admin.global-network-integrated-service.integrated-service-list',compact('global_integrated_service'));
    }

    public function create()
    {
        $globalNetwork = GlobalNetwork::get();
        return view('admin.global-network-integrated-service.create-global-integrated-service', compact('globalNetwork'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'global_network_country'                 => 'required',
            'global_network_integrate_title'         => 'required',
            'global_network_integrate_description'   => 'required',
            'global_network_integrate_image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //dd($request->all());

        if($request->hasfile('global_network_integrate_image'))
        {   
                    $file = $request -> file('global_network_integrate_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    // dd($filename);
                    if($file->move('admin/uploads/global-network-integrate/image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
        
        $integrated_service = GlobalNetworkIntegrated::create([
                'global_network_country'               => $request -> global_network_country,
                'global_network_integrate_title'       => $request -> global_network_integrate_title,
                'global_network_integrate_description' => $request -> global_network_integrate_description,
                'global_network_integrate_image'       => $filename,
        ]);

        return redirect('admin/global-integrated-service-list')->with('success','Global Network Integrated Service has been added successfully.');
    }

    public function edit($id)
    {
        $integrated_service = GlobalNetworkIntegrated::find($id);
        $globalNetwork = GlobalNetwork::get();
        return view('admin.global-network-integrated-service.edit-integrated-service',compact('integrated_service','globalNetwork'));
    }

    public function update(Request $request,$id)
    {
        // dd($request->all());
       $request->validate([
            'global_network_country'                 => 'required',
            'global_network_integrate_title'         => 'required',
            'global_network_integrate_description'   => 'required',
            'global_network_integrate_image'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //dd($request->all());
        $integrated_service = GlobalNetworkIntegrated::find($id);
        if($request->hasfile('global_network_integrate_image'))
        {   
                    $destination='admin/uploads/global-network-integrate/image/'.$integrated_service->global_network_integrate_image;
                    
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    $file = $request -> file('global_network_integrate_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    // dd($filename);
                    if($file->move('admin/uploads/global-network-integrate/image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        } 
        else{
            $filename = $integrated_service->global_network_integrate_image;
        }
        $integrated_service -> global_network_country                = $request -> global_network_country;
        $integrated_service -> global_network_integrate_title        = $request -> global_network_integrate_title;
        $integrated_service -> global_network_integrate_description  = $request -> global_network_integrate_description;
        $integrated_service -> global_network_integrate_image        = $filename;
        $integrated_service -> save();
        
        return redirect('admin/global-integrated-service-list')->with('success','Integrated Service has been updated successfully.');
    }

    public function destroy(Request $request)
    {
        $int_service_id = $request->id;
        if($int_service_id != '')
        {
            $int_service = GlobalNetworkIntegrated::find($int_service_id);
          
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
