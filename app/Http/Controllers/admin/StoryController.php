<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Story;
use Illuminate\Support\Facades\File;

class StoryController extends Controller
{
    public function index(Request $request)
    {
        if($request->story_search){

                $stories = Story::where('stories_title','like','%'.$request->story_search.'%')
                                ->orWhere('stories_type','like','%'.$request->story_search.'%')
                                ->orWhere('short_description','like','%'.$request->story_search.'%')
                                ->paginate(6);

                $output = '';
                $data = [];
                foreach($stories as $key=>$item)
                {   //dd(json_decode($item->extra_image));
                    $ext_img = "";
                    foreach(json_decode($item->extra_image,true) as $picture){
                            $ext_img .=  '<img src="/admin/uploads/story/extra_image/'.$picture.'" width="70px" height="70px" style="margin-right: 5px;" alt="Image">';
                    }
                    // print_r($ext_img);
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$stories->firstItem() + $key.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->stories_title.'</td>
                                <td> '.$item->stories_type.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->short_description.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->long_description.'</td>
                                <td> '.'<img src="/admin/uploads/story/main_image/'.$item->main_image.'" width="70px" height="70px" alt="Image">'.'</td>
                                                               
                                <td>'.$ext_img.'</td>
                                                        
                                <td> '.'<a class="btn btn-primary btn-md" href="edit-story/'.$item->id.'">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_story(this)" data-id="'.$item->id.'" id="story_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>
                                </tr>'; 
                                  
                    $data[] = $item['stories_title'];  
                                       
                }
                return response()->json([
                    'output' => $output, 
                    'data' => $data,
                ]);
        } 
        else{
             $stories = Story::paginate(6);
        }
        return view('admin.story.story-list',compact('stories'));
    }

    public function create()
    {
        return view('admin.story.create-story');
    }

    public function store(Request $request)
    {
        $request->validate([
            'stories_title'      => 'required',
            'stories_type'       => 'required',
            'short_description'  => 'required',
            'long_description'   => 'required',
            'main_image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'extra_image'        => 'required',
            'extra_image.*'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);  
        //dd($request->all());
        if($request->hasfile('main_image'))
        {   
                    $file = $request -> file('main_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    // dd($filename);
                    if($file->move('admin/uploads/story/main_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }

        $data = [];
        if($request -> hasfile('extra_image')){
                $files = $request->file('extra_image');
                foreach($files as $image)
                {
                        $imageName = time().rand(1,99).'.'.$image->getClientOriginalExtension();
                        $image -> move('admin/uploads/story/extra_image/',$imageName);
                        $data[] = $imageName;
                }
        }  
        //dd($request->json_encode($data));
        $stories = Story::create([
            'stories_title'      => $request -> stories_title,
            'stories_type'       => $request -> stories_type,
            'short_description'  => $request -> short_description,
            'long_description'   => $request -> long_description,
            'main_image'         => $filename,
            'extra_image'        => json_encode($data),
        ]);
        //dd($stories);
        return redirect('admin/story-list')->with('success','Story has been added successfully.');
    }
    public function edit($id)
    {
        $stories = Story::find($id);
        return view('admin.story.edit-story',compact('stories'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'stories_title'      => 'required',
            'stories_type'       => 'required',
            'short_description'  => 'required',
            'long_description'   => 'required',
            'main_image'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           //'extra_image'        => 'required',
            'extra_image.*'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);  
        //dd($request->all());
         $stories = Story::find($id);
        if($request->hasfile('main_image'))
        {           
                    $destination='admin/uploads/story/main_image/'.$stories->main_image;
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    $file = $request -> file('main_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    if($file->move('admin/uploads/story/main_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
        else{
                $filename = $stories->main_image;
        }

        $data = [];
        if($request->hasfile('extra_image')){
            foreach(json_decode($stories->extra_image) as $picture){
                $destination = 'admin/uploads/story/extra_image/'.$picture;
                if(File::exists($destination))
                {
                        File::delete($destination);
                }
            }
                $files = $request->file('extra_image');
                foreach($files as $image)
                {
                        $imageName = time().rand(1,99).'.'.$image->getClientOriginalExtension();
                        // dump($imageName);
                        $image -> move('admin/uploads/story/extra_image/',$imageName);
                        $data[] = $imageName;
                        $stories->extra_image = json_encode($data);
                }
                // dd('here');
        }  
        else{
                $imageName = $stories->extra_image;
                //$stories->extra_image = $imageName;
        }
        //dd($request->json_encode($data));
        
    
        $stories->stories_title      = $request -> stories_title;
        $stories->stories_type       = $request -> stories_type;
        $stories->short_description  = $request -> short_description;
        $stories->long_description   = $request -> long_description;
        $stories->main_image         = $filename;
        // $stories->extra_image       =  json_encode($data);
        $stories->save();
        //dd($stories);
        return redirect('admin/story-list')->with('success','Story has been updated successfully.');
    }

    public function destroy(Request $request)
    {
        $story_id = $request->id;
        if($story_id != '')
        {
            $story = Story::find($story_id);
            // dd($story);
            $destination='admin/uploads/story/main_image/'.$story->main_image;
        
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            
            foreach(json_decode($story->extra_image) as $picture){
                $destination = 'admin/uploads/story/extra_image/'.$picture;
                if(File::exists($destination))
                {
                        File::delete($destination);
                }
            }
            $story -> delete();

           return redirect('admin/story-list')->with('success','Story has been deleted successfully.'); 
        }
    }

    public function deleteImg(Request $request,$id,$index)
    {
        
        $multi_delete_name = $request->name;

        $multi_delete = Story::find($id);
    
        $data = json_decode($multi_delete->extra_image,true);

        $filename = $data[$index];
        unset($data[$index]);
        
        $multi_delete->update(['extra_image'=> count($data)>0 ? json_encode(array_values($data)):[]]);
        $destination = 'admin/uploads/story/extra_image/'.$filename;
                       
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
     
        return response()->json(['success'=>true]);
    }

}