<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GlobalNetwork;
use Illuminate\Support\Facades\File;

class GlobalNetworksController extends Controller
{
    public function index(Request $request)
    {
        if($request->glob_net_search){

                $global_network = GlobalNetwork::where('banner_title','like','%'.$request->glob_net_search.'%')
                                ->orWhere('office_address','like','%'.$request->glob_net_search.'%')
                                ->orWhere('web_link','like','%'.$request->glob_net_search.'%')
                                ->orWhere('web_link_content','like','%'.$request->glob_net_search.'%')
                                ->orWhere('short_desc','like','%'.$request->glob_net_search.'%')
                                ->paginate(6);

                $output = '';
                $data = [];
                foreach($global_network as $key=>$item)
                {   
                    $img_slide = "";
                    foreach(json_decode($item->image_slide,true) as $picture){
                            $img_slide .=  '<img src="/admin/uploads/global-network/image_slide/'.$picture.'" width="70px" height="70px" style="margin-right: 5px;" alt="Image">';
                    }
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$global_network->firstItem() + $key.'</td>
                                <td> '.'<img src="/admin/uploads/global-network/banner_image/'.$item->banner_image.'" width="70px" height="70px"
                                                                alt="Image">'.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->banner_title.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->short_desc.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->long_desc.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->web_link_content.'</td>web_link_content
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->web_link.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->office_address.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->popular_city_content.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.'<img src="/admin/uploads/global-network/popular_city_image/'.$item->popular_city_image.'" width="70px" height="70px"
                                                                alt="Image">'.'</td>
                                                               
                                <td class="text-truncate" style="max-width: 200px;">'.$img_slide.'</td>
                                                        
                                <td> '.'<a class="btn btn-primary btn-md" href="edit-global-network/'.$item->id.'">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_global_network(this)" data-id="'.    $item->id.'" id="global_network_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>
                                </tr>';  
                    $data[] = $item['banner_title'];                      
                }
                return response()->json([
                    'output' => $output, 
                    'data'  => $data,
                ]);
        } 
        else{
             $global_network = GlobalNetwork::paginate(6);
        }
       
        return view('admin.global-network.global-network-list',compact('global_network'));
    }

    public function create()
    {
        return view('admin.global-network.create-global-network');
    }

    public function store(Request $request)
    {
        $request->validate([
                'banner_image'          => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=1920,height=651',
                'banner_title'          => 'required',
                'short_desc'            => 'required',
                'long_desc'             => 'required',
                'web_link_content'      => 'required',
                'web_link'              => 'required',
                'office_address'        => 'required',
                'popular_city_content'  => 'required',
                'popular_city_image'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=611,height=700',
                'image_slide'           => 'required',
                'image_slide.*'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=465,height=441',
    
    ],
    [
        'banner_image.dimensions'        => 'Please upload an image of dimensions 1920 * 651 pixels',
        'popular_city_image.dimensions'  => 'Please upload an image of dimensions 611 * 700 pixels',
        'image_slide.*.dimensions'       => 'Please upload an image of dimensions 465 * 441 pixels',
    ]);

        //dd($request->all());
        if($request->hasfile('banner_image'))
        {   
                    $file = $request -> file('banner_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    // dd($filename);
                    if($file->move('admin/uploads/global-network/banner_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
         if($request->hasfile('popular_city_image'))
        {   
                    $file = $request -> file('popular_city_image');
                    $extension = $file -> getClientOriginalExtension();
                    $city_filename = time().'.'.$extension;
                    // dd($filename);
                    if($file->move('admin/uploads/global-network/popular_city_image/',$city_filename))
                    {
                        $files[] = $city_filename;
                    }                    
        }

        $data = [];
        if($request -> hasfile('image_slide')){
                $files = $request->file('image_slide');
                foreach($files as $image)
                {
                        $imageName = time().rand(1,99).'.'.$image->getClientOriginalExtension();
                        $image -> move('admin/uploads/global-network/image_slide/',$imageName);
                        $data[] = $imageName;
                }
        }  
        
        $globalNetwork = GlobalNetwork::create([
                'banner_image'          => $filename,
                'banner_title'          => $request->banner_title,
                'short_desc'            => $request->short_desc,
                'long_desc'             => $request->long_desc,
                'web_link_content'      => $request->web_link_content,
                'web_link'              => $request->web_link,
                'office_address'        => $request->office_address,
                'office_phone'        => $request->office_phone,
                'office_email'        => $request->office_email,
                'popular_city_content'  => $request->popular_city_content,
                'popular_city_image'    => $city_filename,
                'image_slide'           => json_encode($data),
        ]);

        return redirect('admin/global-network-list')->with('success','Global network has been added successfully.');
    }

    public function edit($id)
    {
        $global_network = GlobalNetwork::find($id);
        return view('admin.global-network.edit-global-network',compact('global_network'));
    }

    public function update(Request $request,$id)
    {
        //dd($request->all());
        $request->validate([
                'banner_image'          => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=1920,height=651',
                'banner_title'          => 'required',
                'short_desc'            => 'required',
                'long_desc'             => 'required',
                'web_link_content'      => 'required',
                'web_link'              => 'required',
                'office_address'        => 'required',
                'popular_city_content'  => 'required',
                'popular_city_image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=611,height=700',
                //'image_slide'          => 'required',
                'image_slide.*'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=465,height=441',
        ],
        [
            'banner_image.dimensions'        => 'Please upload an image of dimensions 1920 * 651 pixels',
            'popular_city_image.dimensions'  => 'Please upload an image of dimensions 611 * 700 pixels',
            'image_slide.*.dimensions'       => 'Please upload an image of dimensions 465 * 441 pixels',
        ]);
        //dd($request->all());
        $global_network = GlobalNetwork::find($id);
        //dd($global_network);
        if($request->hasfile('banner_image'))
        {   
                    $destination='admin/uploads/global-network/banner_image/'.$global_network->banner_image;
                    
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    $file = $request -> file('banner_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    // dd($filename);
                    if($file->move('admin/uploads/global-network/banner_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
        else{
            $filename = $global_network->banner_image;
        }
         if($request->hasfile('popular_city_image'))
        {       
                    $destination='admin/uploads/global-network/popular_city_image/'.$global_network->popular_city_image;
                    if(File::exists($destination))
                    {
                        File::delete($destination);
                    }
                    $file = $request -> file('popular_city_image');
                    $extension = $file -> getClientOriginalExtension();
                    $city_filename = time().'.'.$extension;
                    // dd($filename);
                    if($file->move('admin/uploads/global-network/popular_city_image/',$city_filename))
                    {
                        $files[] = $city_filename;
                    }                    
                }
                else{
                    $city_filename = $global_network->popular_city_image;
                }
                
                $data = [];
                if($request -> hasfile('image_slide')){
                    foreach(json_decode($global_network->image_slide) as $picture){
                        $destination = 'admin/uploads/global-network/image_slide/'.$picture;
                       // dd($destination);
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    }
                $files = $request->file('image_slide');
                foreach($files as $image)
                {
                    //dd($image);
                        $imageName = time().rand(1,99).'.'.$image->getClientOriginalExtension();
                        $image -> move('admin/uploads/global-network/image_slide/',$imageName);
                        $data[] = $imageName;
                        $global_network -> image_slide = json_encode($data);
                }
        }  
         else{
            //dd($global_network->image_slide);
            $imageName = $global_network->image_slide;
        }
        
        $global_network -> banner_image           = $filename;
        $global_network -> banner_title           = $request -> banner_title;
        $global_network -> short_desc             = $request -> short_desc;
        $global_network -> long_desc              = $request -> long_desc;
         $global_network -> web_link_content      = $request -> web_link_content;
        $global_network -> web_link               = $request -> web_link;
        $global_network -> office_address         = $request -> office_address;
        $global_network -> office_phone         = $request -> office_phone;
        $global_network -> office_email         = $request -> office_email;
        $global_network -> popular_city_content   = $request -> popular_city_content;
        $global_network -> popular_city_image     = $city_filename;
        //$global_network -> image_slide            = json_encode($data);
        $global_network -> save();
        
        return redirect('admin/global-network-list')->with('success','Global network has been updated successfully.');
    }

    public function destroy(Request $request,$id)
    {
        $glob_net_id = $request->id;
        if($glob_net_id != '')
        {
            $global_network = GlobalNetwork::find($glob_net_id);
            
            $destination='admin/uploads/global-network/banner_image/'.$global_network->banner_image;
        
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $destination='admin/uploads/global-network/popular_city_image/'.$global_network->popular_city_image;
        
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            
            foreach(json_decode($global_network->image_slide) as $picture){
                $destination = 'admin/uploads/global-network/image_slide/'.$picture;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
            }
            $global_network -> delete();

           return redirect('admin/global-network-list')->with('success','Global Network has been deleted successfully.'); 
        }
    }
    
    public function deleteImg(Request $request,$id,$index)
    {
        
        $multi_delete_name = $request->name;

        $multi_delete = GlobalNetwork::find($id);
    
         $data = json_decode($multi_delete->image_slide,true);

        $filename = $data[$index];
        unset($data[$index]);
        
        $multi_delete->update(['image_slide'=> count($data)>0 ? json_encode(array_values($data)):[]]);
        $destination = 'admin/uploads/global-network/image_slide/'.$filename;
                       
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
     
        return response()->json(['success'=>true]);
    }
}