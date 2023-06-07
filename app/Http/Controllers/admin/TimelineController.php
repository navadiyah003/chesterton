<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Timeline;
use File;

class TimelineController extends Controller
{
    public function index(Request $request)
    {
        if($request->timeline_search){

                $timeline = Timeline::where('year','like','%'.$request->timeline_search.'%')
                                                ->orWhere('timeline_title','like','%'.$request->timeline_search.'%')
                                                ->paginate(6);

                $output = '';
                $data = [];
                foreach($timeline as $key=>$item)
                {   
                    
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$timeline->firstItem() + $key.'</td>
                                <td> '.$item->year.'</td>
                                <td class="text-truncate" style="max-width: 200px;">'.'<img src="/admin/uploads/timeline/timeline_image/'.$item->timeline_image.'" width="70px" height="70px" style="margin-right: 5px;" alt="Image">'.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->timeline_title.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->timeline_desc.'</td>
                               
                                <td> '.'<a class="btn btn-primary btn-md" href="edit-timeline/'.$item->id.'">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_timeline(this)" data-id="'.$item->id.'" id="timeline_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>
                                </tr>';  

                    $data[] = $item['year'];                    
                }
                return response()->json([
                    'output' => $output, 
                    'data'   => $data,
                ]);
        }
       else{
             $timeline = Timeline::paginate(6);
       }
        return view('admin.timeline.timeline-list',compact('timeline'));
    }

    public function create()
    {
        return view('admin.timeline.create-timeline');
    }

    public function store(Request $request)
    {
        $request->validate([
            'year'               => 'required',
            'timeline_image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'timeline_title'     => 'required',
            'timeline_desc'      => 'required',
        ]);

         if($request->hasfile('timeline_image'))
        {   
                    $file = $request -> file('timeline_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    if($file->move('admin/uploads/timeline/timeline_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
       
        $timeline = Timeline::create([
            'year'               => $request -> year,
            'timeline_image'     => $filename,
            'timeline_title'     => $request -> timeline_title,
            'timeline_desc'      => $request -> timeline_desc,
        ]);


        return redirect('admin/timeline-list')->with('success','Timeline has been added successfully.');
    }

    public function edit($id)
    {
        $timeline = Timeline::find($id);
        return view('admin.timeline.edit-timeline',compact('timeline'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'year'               => 'required',
            'timeline_image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'timeline_title'     => 'required',
            'timeline_desc'      => 'required',
        ]);
        $timeline = Timeline::find($id);

         if($request->hasfile('timeline_image'))
        {   
                    $destination = '/admin/uploads/timeline/timeline_image/'.$timeline->timeline_image;
                    if(File::exists($destination))
                    {
                        File::delete($destination);
                    }
                    $file = $request -> file('timeline_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    if($file->move('admin/uploads/timeline/timeline_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
        else{
             $filename = $timeline -> timeline_image;
        }

        $timeline -> year                = $request -> year;
        $timeline -> timeline_title      = $request -> timeline_title;
        $timeline -> timeline_desc       = $request -> timeline_desc;
        $timeline -> timeline_image      = $filename;
        $timeline -> save();

        return redirect('admin/timeline-list')->with('success','Timeline has been updated successfully.');
    }

    public function destroy(Request $request,$id)
    {
        $timeline_id = $request->id;
        if($timeline_id != '')
        {
            $timeline = Timeline::find($timeline_id);
           
                $destination = '/admin/uploads/timeline/timeline_image/'.$timeline->timeline_image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
            
            $timeline -> delete();

           return redirect('admin/timeline-list')->with('success','Timeline has been deleted successfully.'); 
        }
    }
}
