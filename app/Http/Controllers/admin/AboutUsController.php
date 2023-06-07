<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{
    public function index(Request $request)
    {
        if($request->about_us_search){

                $about_us = AboutUs::where('short_desc','like','%'.$request->about_us_search.'%')
                                ->orWhere('future_title','like','%'.$request->about_us_search.'%')
                                ->orWhere('social_title','like','%'.$request->about_us_search.'%')
                                ->paginate(6);

                $output = '';
                $data = [];
                foreach($about_us as $key=>$item)
                {   
                    $img_social = "";
                    foreach(json_decode($item->social_images) as $picture){
                            $img_social .=  '<img src="/admin/uploads/about-us/social_images/'.$picture.'" width="70px" height="70px" style="margin-right: 5px;" alt="Image">';
                    }
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$about_us->firstItem() + $key.'</td>
                                <td> '.'<img src="/admin/uploads/about-us/main_image/'.$item->main_image.'" width="70px" height="70px"
                                                                alt="Image">'.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->short_desc.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->long_desc.'</td>
                                <td> '.'<img src="/admin/uploads/about-us/future_image/'.$item->future_image.'" width="70px" height="70px"
                                                                alt="Image">'.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->future_title.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->future_desc.'</td>
                               
                                <td class="text-truncate" style="max-width: 200px;">'.$img_social.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->social_title.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->social_desc.'</td>
                                                        
                                <td > '.'<a class="btn btn-primary btn-md" href="edit-about-us/'.$item->id.'">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_about_us(this)" data-id="'.$item->id.'" id="about_us_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>
                                </tr>';   

                    $data[] = $item['short_desc'];                   
                }
                return response()->json([
                    'output' => $output, 
                    'data'  => $data,
                ]);
        } 
        else{
            $about_us = AboutUs::paginate(6);
        }
        return view('admin.about-us.about-us-list',compact('about_us'));
    }

    // public function create()
    // {
    //     return view('admin.about-us.create-about-us');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //             'main_image'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=1500,height=550',
    //             'short_desc'      => 'required',
    //             'long_desc'       => 'required',
    //             'future_image'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=690,height=645',
    //             'future_title'    => 'required',
    //             'future_desc'     => 'required',
    //             'social_images'   => 'required',
    //             'social_images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=465,height=441',
    //             'social_title'    => 'required',
    //             'social_desc'     => 'required',
    //            ],
    //     [
    //         'main_image.dimensions'      => 'please upload image of dimensions 1500 * 550',
    //         'future_image.dimensions'    => 'please upload image of dimensions 690 * 645',
    //         'social_images.*.dimensions'    => 'please upload image of dimensions 465 * 441',
    //     ]);
    //    // dd($request->all());

    //      if($request->hasfile('main_image'))
    //     {   
    //                 $file = $request -> file('main_image');
    //                 $extension = $file -> getClientOriginalExtension();
    //                 $filename = time().'.'.$extension;
    //                 if($file->move('admin/uploads/about-us/main_image/',$filename))
    //                 {
    //                     $files[] = $filename;
    //                 }                    
    //     }
    //      if($request->hasfile('future_image'))
    //     {   
    //                 $file = $request -> file('future_image');
    //                 $extension = $file -> getClientOriginalExtension();
    //                 $future_filename = time().'.'.$extension;
    //                 if($file->move('admin/uploads/about-us/future_image/',$future_filename))
    //                 {
    //                     $files[] = $future_filename;
    //                 }                    
    //     }

    //     $data = [];
    //     if($request -> hasfile('social_images')){
    //             $files = $request->file('social_images');
    //             foreach($files as $image)
    //             {
    //                     $imageName = time().rand(1,99).'.'.$image->getClientOriginalExtension();
    //                     $image -> move('admin/uploads/about-us/social_images/',$imageName);
    //                     $data[] = $imageName;
    //             }
    //     }  
        
    //     $about_us = AboutUs::create([
    //             'main_image'        => $filename,
    //             'short_desc'        => $request -> short_desc,
    //             'long_desc'         => $request -> long_desc,
    //             'future_image'      => $future_filename,
    //             'future_title'      => $request -> future_title,
    //             'future_desc'       => $request -> future_desc,
    //             'social_images'     => json_encode($data),
    //             'social_title'      => $request ->social_title,
    //             'social_desc'       => $request ->social_desc,
    //     ]);

    //     return redirect('admin/about-us-list')->with('success','About-us has been added successfully.');
    // }

    public function edit($id)
    {
        $about_us = AboutUs::find($id);
        return view('admin.about-us.edit-about-us',compact('about_us'));
    }

    public function update(Request $request,$id)
    {

        $request->validate([
                'main_image'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=1500,height=550',
                'short_desc'      => 'required',
                'long_desc'       => 'required',
                'future_image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=690,height=645',
                'future_title'    => 'required',
                'future_desc'     => 'required',
                //'social_images'   => 'required',
                // 'social_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=465,height=441',
                'social_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'social_title'    => 'required',
                'social_desc'     => 'required',
           ],
    [
        'main_image.dimensions'      => 'Please upload an image of dimensions 1500 * 550 pixels',
        'future_image.dimensions'    => 'Please upload an image of dimensions 690 * 645 pixels',
        'social_images.*.dimensions'    => 'Please upload an image of dimensions 465 * 441 pixels',
    ]);
       // dd($request->all());
        $about_us = AboutUs::find($id);
         if($request->hasfile('main_image'))
        {   
                    $destination='admin/uploads/about-us/main_image/'.$about_us->main_image;
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    $file = $request -> file('main_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    if($file->move('admin/uploads/about-us/main_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
        else{
            $filename = $about_us -> main_image;
        }
        if($request->hasfile('future_image'))
        {   
                    $destination='admin/uploads/about-us/future_image/'.$about_us->future_image;
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    $file = $request -> file('future_image');
                    $extension = $file -> getClientOriginalExtension();
                    $future_filename = time().'.'.$extension;
                    if($file->move('admin/uploads/about-us/future_image/',$future_filename))
                    {
                        $files[] = $future_filename;
                    }                    
        }
        else{
            $future_filename = $about_us -> future_image;
        }

        $data = [];
        if($request -> hasfile('social_images')){
            foreach(json_decode($about_us->social_images) as $picture){
                        $destination = 'admin/uploads/about-us/social_images/'.$picture;
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    }
                $files = $request->file('social_images');
                
                foreach($files as $image)
                {
                        $imageName = time().rand(1,99).'.'.$image->getClientOriginalExtension();
                        $image -> move('admin/uploads/about-us/social_images/',$imageName);
                        $data[] = $imageName;
                        $about_us -> social_images  = json_encode($data);
                }
        }
        else{
            $imageName = $about_us -> social_images;
        }
        
        $about_us -> main_image     = $filename;
        $about_us -> short_desc     = $request -> short_desc;
        $about_us -> long_desc      = $request -> long_desc;
        $about_us -> future_image   = $future_filename;
        $about_us -> future_title   = $request -> future_title;
        $about_us -> future_desc    = $request -> future_desc;
        //$about_us -> social_images  = json_encode($data);
        $about_us -> social_title   = $request -> social_title;
        $about_us -> social_desc    = $request -> social_desc;
        $about_us -> save();

        return redirect('admin/about-us-list')->with('success','About-us has been updated successfully.');
    }

    public function destroy(Request $request,$id)
    {
        $about_us_id = $request->id;
        if($about_us_id != '')
        {
            $about_us = AboutUs::find($about_us_id);
          
           $destination='admin/uploads/about-us/main_image/'.$about_us->main_image;
                if(File::exists($destination))
                {
                        File::delete($destination);
                }
            $destination='admin/uploads/about-us/future_image/'.$about_us->future_image;
                if(File::exists($destination))
                {
                        File::delete($destination);
                }
            
            foreach(json_decode($about_us->social_images) as $picture){
                        $destination = 'admin/uploads/about-us/social_images/'.$picture;
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
            }
            $about_us -> delete();

           return redirect('admin/about-us-list')->with('success','About-us has been deleted successfully.'); 
        }
    }

    public function deleteImg(Request $request,$id,$index)
    {
        
        $multi_delete_name = $request->name;

        $multi_delete = AboutUs::find($id);
    
         $data = json_decode($multi_delete->social_images,true);

        $filename = $data[$index];
        unset($data[$index]);
        
        $multi_delete->update(['social_images'=> count($data)>0 ? json_encode(array_values($data)):[]]);
        $destination = 'admin/uploads/about-us/social_images/'.$filename;
                       
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
     
        return response()->json(['success'=>true]);
    }

}
