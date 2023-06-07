<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\CareerDescriptions;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CareerDetailController extends Controller
{
    public function applicant(Request $request)
    {
        if($request->applicant_search){

            $applicants = Applicant::where('fullname','like','%'.$request->applicant_search.'%')
                            ->orWhere('email','like','%'.$request->applicant_search.'%')
                            ->orWhere('message','like','%'.$request->applicant_search.'%')
                            ->paginate(10);

            $output = '';
            $data = [];
            foreach($applicants as $key=>$item)
            {   
                $count = $key + 1;
                $output .= '<tr id='.$item->id.'>
                            <td>'.$count.'</td>
                            <td> '.$item->fullname.'</td>
                            <td> '.$item->email.'</td>
                            <td> '.$item->message.'</td>
                            <td> <a class="btn btn-primary btn-md" target="_blank"
                            href="uploads/cv/'.$item->cv.'"><i
                                class="fas fa-download"></i></a></td>
                           
                            <td> '.'<button type="button" class="btn btn-danger btn-md"
                                                        onclick="delete_applicant(this)" data-id="'.$item->id.'" id="delete_applicant"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                               '.'</td>
                            </tr>';  

                $data[] = $item['fullname'];                      
            }
            return response()->json([
                'output' => $output, 
                'data' => $data,
            ]);
    } 
    else{
        $applicant = Applicant::paginate(10);
    }
        return view('admin.career.list', compact('applicant'));
    }

    public function destroy(Request $request,$id)
    {
        $applicant_id = $request->id;
        if($applicant_id != '')
        {
            $applicants = Applicant::find($applicant_id);
            if($applicants->cv) {
                $destination='/admin/uploads/cv/'.$applicants->cv;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }

            }
        
            $applicants -> delete();

           return redirect('admin/applicant')->with('success','Applicant has been deleted successfully.'); 
        }
    }

    public function careerDetails(Request $request)
    {
        $details = CareerDescriptions::paginate(10);
        return view('admin.career.detail-list', compact('details'));
    }
    public function edit($id)
    {
        $detail = CareerDescriptions::find($id);
        return view('admin.career.edit', compact('detail'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'     => 'required', 
            'bg_image'      => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'bg_image'      => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'sub_title'     => 'required', 
            'sub_description'     => 'required', 
            'image'      => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'opp_title'     => 'required', 
            'opp_description'     => 'required', 
            'contact_title'     => 'required', 
        ]);
        $detail = CareerDescriptions::find($id);
        $detail->title = $request->title;
        if($request->hasfile('bg_image_mobile'))
        {   
            $file = $request -> file('bg_image_mobile');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('admin/uploads/career/',$filename);
            $detail->bg_image_mobile = $filename;
        }
        if($request->hasfile('bg_image'))
        {   
            $file = $request -> file('bg_image');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('admin/uploads/career/',$filename);
            $detail->bg_image = $filename;
        }
        $detail->sub_title = $request->sub_title;
        $detail->sub_description = $request->sub_description;
        $data = [];
        if($request -> hasfile('images')){
                if($detail->images) {
                    foreach(json_decode($detail->images) as $picture){
                        $destination = 'admin/uploads/career/'.$picture;
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    }
                }
                $files = $request->file('images');
                
                foreach($files as $img)
                {
                        $imageName = time().rand(1,99).'.'.$img->getClientOriginalExtension();
                        $img -> move('admin/uploads/career/',$imageName);
                        $data[] = $imageName;
                        $detail->images = json_encode($data);
                }
        }
        $detail->opp_title = $request->opp_title;
        $detail->opp_description = $request->opp_description;
        $detail->contact_title = $request->contact_title;
        $detail->save();
        return redirect('admin/career-details')->with('success','Career description has been updated successfully.');
    }
    public function deleteImg(Request $request,$id,$index)
    {
        
        $multi_delete_name = $request->name;

        $multi_delete = CareerDescriptions::find($id);
    
         $data = json_decode($multi_delete->images,true);

        $filename = $data[$index];
        unset($data[$index]);
        
        $multi_delete->update(['images'=> count($data)>0 ? json_encode(array_values($data)):[]]);
        $destination = 'admin/uploads/career/'.$filename;
                       if($destination) {
                           if(File::exists($destination))
                           {
                                   File::delete($destination);
                           }
                       }
     
        return response()->json(['success'=>true]);
    }
}