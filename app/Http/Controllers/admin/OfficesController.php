<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offices;
use App\Models\ContactUsDetail;
use Illuminate\Support\Facades\File;

class OfficesController extends Controller
{
    public function index(Request $request)
    {   
        if($request->offices_search){

        $offices = Offices::where('title','like','%'.$request->offices_search.'%')
                                        ->orWhere('office_address','like','%'.$request->offices_search.'%')
                                        ->orWhere('office_email','like','%'.$request->offices_search.'%')
                                        ->paginate(6);

                $output = '';
                $data = [];
                foreach($offices as $key=>$item)
                {  
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$offices->firstItem() + $key.'</td>
                                 <td class="text-truncate" style="max-width: 150px;"> '.$item->title.'</td>
                                <td> '.'<img src="/admin/uploads/offices/main_image/'.$item->main_image.'" width="70px" height="70px"
                                                                alt="Image">'.'</td>
                               
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->office_address.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->office_email.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->facebook.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->linkedin.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->instagram.'</td>
                                                        
                                <td> '.'<a class="btn btn-primary btn-md" href="edit-offices/'.$item->id.'">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_offices(this)" data-id="'.$item->id.'" id="offices_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>
                                </tr>';         
                                
                    $data[] = $item['title'];           
                }
                return response()->json([
                    'output' => $output,
                    'data'   => $data, 
                ]);
        } 
        else{
            $offices = Offices::paginate(6);
        }   
        
        return view('admin.offices.offices-list',compact('offices'));
    }

    public function create()
    {
        return view('admin.offices.create-offices');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'             => 'required',
            'main_image'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'main_image'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=1920,height=496',
            'office_address'    => 'required',
            'office_email'      => 'required|email',
            'facebook'          => 'required',
            'linkedin'          => 'required',
            'instagram'         => 'required',

    ],
    [
        'main_image.dimensions'      => 'please upload image of dimensions 1920 * 496',
    ]);
        // dd($request->all());
         if($request->hasfile('main_image'))
        {   
                    $file = $request -> file('main_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    if($file->move('admin/uploads/offices/main_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }

        $offices = Offices::create([
            'title'             => $request -> title,
            'main_image'        => $filename,
            'office_address'    => $request -> office_address,
            'office_email'      => $request -> office_email,
            'facebook'          => $request -> facebook,
            'linkedin'          => $request -> linkedin,
            'instagram'         => $request -> instagram,
        ]);

        return redirect('admin/offices-list')->with('success','Offices has been added successfully.');
    }

    public function edit($id)
    {
        $offices = Offices:: find($id);
        return view('admin.offices.edit-offices',compact('offices'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title'             => 'required',
            'main_image'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=1920,height=496',
            'office_address'    => 'required',
            'office_email'      => 'required|email',
            'facebook'          => 'required',
            'linkedin'          => 'required',
            'instagram'         => 'required',

        ],
        [
            'main_image.dimensions'      => 'please upload image of dimensions 1920 * 496',
        ]);

        $offices  = Offices :: find($id);

        if($request->hasfile('main_image'))
        {           
                    $destination='admin/uploads/offices/main_image/'.$offices->main_image;
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    $file = $request -> file('main_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    if($file->move('admin/uploads/offices/main_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
        else{
            $filename = $offices -> main_image;
        }

        $offices -> title              = $request -> title;
        $offices -> main_image         = $filename;
        $offices -> office_address     = $request -> office_address;
        $offices -> office_email       = $request -> office_email;
        $offices -> facebook           = $request -> facebook;
        $offices -> linkedin           = $request -> linkedin;
        $offices -> instagram          = $request -> instagram;
        $offices -> save();

        return redirect('admin/offices-list')->with('success','Offices has been updated successfully.');
    }

    public function destroy(Request $request)
    {
        $offices_id = $request->id;
        if($offices_id != '')
        {
            $offices = Offices::find($offices_id);
          
           $destination='admin/uploads/offices/main_image/'.$offices->main_image;
                if(File::exists($destination))
                {
                        File::delete($destination);
                }
            
            $offices -> delete();

           return redirect('admin/offices-list')->with('success','offices has been deleted successfully.'); 
        }
    }
}
