<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use Illuminate\Support\Facades\File;

class HistoryController extends Controller
{
    public function index(Request $request)
    {
        if($request->history_search){

                $history = History::where('short_desc','like','%'.$request->history_search.'%')
                                ->paginate(6);

                $output = '';
                $data = [];
                foreach($history as $key=>$item)
                {   
                   
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$history->firstItem() + $key.'</td>
                                <td> '.'<img src="/admin/uploads/history/main_image/'.$item->main_image.'" width="70px" height="70px"
                                                                alt="Image">'.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->short_desc.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->long_desc.'</td>
                                <td> '.'<i class="fas fa-file-pdf" style="font-size:30px;color:red"></i><a href="/admin/uploads/history/brochure/'.$item->brochure.'" target="_blank"></a>'.$item->brochure .'</td>
                               
                                <td> '.'<a class="btn btn-primary btn-md" href="edit-history/'.$item->id.'">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_history(this)" data-id="'.$item->id.'" id="history_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>
                                </tr>'; 
                                
                    $data[] = $item['short_desc'];                    
                }
                return response()->json([
                    'output' => $output, 
                    'data'   => $data,
                ]);
        }
        else{
            $history =  History::paginate(6);
        } 
        
        return view('admin.history.history-list',compact('history'));
    }

    public function create()
    {
        return view('admin.history.create-history');
    }

    public function store(Request $request)
    {
        $request->validate([
            'main_image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=1500,height=411',
            'short_desc'     => 'required',
            'long_desc'      => 'required',
            'brochure'       => 'required|mimes:pdf|max:10000',
        ],
        [
            'main_image.dimensions'      => 'please upload image of dimensions 1500 * 411',
        ]);

         if($request->hasfile('main_image'))
        {   
                    $file = $request -> file('main_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    if($file->move('admin/uploads/history/main_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
         if($request->hasfile('brochure'))
        {   
                    $file = $request -> file('brochure');
                    $extension = $file -> getClientOriginalExtension();
                    $brochure_file = time().'.'.$extension;
                    if($file->move('admin/uploads/history/brochure/',$brochure_file))
                    {
                        $files[] = $brochure_file;
                    }                    
        }

        $history = History::create([
            'main_image'    => $filename,
            'short_desc'    => $request -> short_desc,
            'long_desc'     => $request -> long_desc,
            'brochure'      => $brochure_file,
        ]);

        return redirect('admin/history-list')->with('success','History has been added successfully.');
    }

    public function edit($id)
    {
        $history = History::find($id);
        return view('admin.history.edit-history',compact('history'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'main_image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=1500,height=411',
            'short_desc'     => 'required',
            'long_desc'      => 'required',
            'brochure'       => 'mimes:pdf|max:10000',
        ],
        [
            'main_image.dimensions'      => 'please upload image of dimensions 1500 * 411',
        ]);

        $history = History::find($id);
         if($request->hasfile('main_image'))
        {   
                    $destination='admin/uploads/history/main_image/'.$history->main_image;
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    $file = $request -> file('main_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    if($file->move('admin/uploads/history/main_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
        else{
            $filename = $history -> main_image;
        }
         if($request->hasfile('brochure'))
        {   
                    $destination='admin/uploads/history/brochure/'.$history->brochure;
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    $file = $request -> file('brochure');
                    $extension = $file -> getClientOriginalExtension();
                    $brochure_file = time().'.'.$extension;
                    if($file->move('admin/uploads/history/brochure/',$brochure_file))
                    {
                        $files[] = $brochure_file;
                    }                    
        }
        else{
            $brochure_file = $history -> brochure;
        }
        $history -> main_image    = $filename;
        $history -> short_desc    = $request -> short_desc;
        $history -> long_desc     = $request -> long_desc;
        $history -> brochure      = $brochure_file;
        $history -> save();

        return redirect('admin/history-list')->with('success','History has been updated successfully.');
 
     }

     public function destroy(Request $request)
     {
        $history_id = $request->id;
        if($history_id != '')
        {
            $history = History::find($history_id);
          
           $destination='admin/uploads/history/main_image/'.$history->main_image;
                if(File::exists($destination))
                {
                        File::delete($destination);
                }
            $destination='admin/uploads/history/brochure/'.$history->brochure;
                if(File::exists($destination))
                {
                        File::delete($destination);
                }
            $history -> delete();

           return redirect('admin/history-list')->with('success','History has been deleted successfully.'); 
        }
     }
}
