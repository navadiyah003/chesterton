<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChestertonTeam;
use File;

class OurTeamController extends Controller
{
    public function index(Request $request)
    {
        if($request->our_team_search){
                $our_team = ChestertonTeam::where('member_name','like','%'.$request->our_team_search.'%')
                                ->orWhere('member_position','like','%'.$request->our_team_search.'%')
                                ->paginate(6);

                $output = '';
                $data = [];
                foreach($our_team as $key=>$item)
                {   
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$our_team->firstItem() + $key.'</td>
                                <td> '.$item->member_name.'</td>
                                <td> '.$item->member_position.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->member_desc.'</td>
                                <td> '.'<img src="/admin/uploads/our-team/member_image/'.$item->member_image.'" width="70px" height="70px"
                                                                alt="Image">'.'</td>
                             
                                <td class="text-truncate" style="max-width: 150px;"> '.'<a class="btn btn-primary btn-md" href="edit-our-team/'.$item->id.'">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_our_team(this)" data-id="'.$item->id.'" id="our_team_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                                   '.'</td>

                                </tr>';    
                    $data[] = $item['member_name'];               
                }
                return response()->json([
                    'output' => $output,
                    'data'   => $data, 
                ]);
        } 
        else{
             $our_team = ChestertonTeam::paginate(6);
        }
       
        return view('admin.our-team.our-team-list',compact('our_team'));
    }

    public function create()
    {
        return view('admin.our-team.create-our-team');
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_name'       => 'required',
            'member_position'   => 'required',
            'member_desc'       => 'required',
            'member_image'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=363,height=410',
        ],
        [
            'member_image.dimensions'      => 'please upload image of dimensions 363 * 410',
        ]);

         if($request->hasfile('member_image'))
        {   
                    $file = $request -> file('member_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    if($file->move('admin/uploads/our-team/member_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }

        $our_team = ChestertonTeam::create([
            'member_name'       => $request -> member_name,
            'member_position'   => $request -> member_position,
            'member_desc'       => $request -> member_desc,
            'member_image'      => $filename,
        ]);
        return redirect('admin/our-team-list')->with('success','Team member has been added successfully.');
    } 

    public function edit($id)
    {
        $our_team = ChestertonTeam::find($id);
        return view('admin.our-team.edit-our-team',compact('our_team'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'member_name'       => 'required',
            'member_position'   => 'required',
            'member_desc'       => 'required',
            'member_image'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=363,height=410',
    ],
    [
        'member_image.dimensions'      => 'please upload image of dimensions 363 * 410',
    ]);

        $our_team = ChestertonTeam::find($id);
        if($request->hasfile('member_image'))
        {   
                    $destination='admin/uploads/our-team/member_image/'.$our_team->member_image;
                    
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    $file = $request -> file('member_image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    if($file->move('admin/uploads/our-team/member_image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
        else{
            $filename = $our_team->member_image;
        }
        $our_team -> member_name      = $request -> member_name;
        $our_team -> member_position  = $request -> member_position;
        $our_team -> member_desc      = $request -> member_desc;
        $our_team -> member_image     = $filename;
        $our_team -> save();
        return redirect('admin/our-team-list')->with('success','Team member has been updated successfully.');
    }
    
    public function destroy(Request $request)
    {
        $team_id = $request->id;
        if($team_id != '')
        {
            $our_team = ChestertonTeam::find($team_id);
            
            $destination='admin/uploads/our-team/member_image/'.$our_team->member_image;
        
            if(File::exists($destination))
            {
                File::delete($destination);
            }
          
            $our_team -> delete();

           return redirect('admin/our-team-list')->with('success','Team member has been deleted successfully.'); 
        }
    }
}
