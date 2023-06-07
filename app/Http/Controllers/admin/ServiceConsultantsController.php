<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceConsultants;


class ServiceConsultantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        if($request->input('consultants_search')){
            $about = ServiceConsultants::where('title','like','%'.$request->consultants_search.'%')
                                        ->orWhere('name','like','%'.$request->consultants_search.'%')
                                        ->orWhere('content','like','%'.$request->consultants_search.'%')
                                        ->paginate(6);

                $output = '';
                $data = [];
                foreach($about as $key=>$item)
                {  
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$about->firstItem() + $key.'</td>
                                 <td class="text-truncate" style="max-width: 150px;"> '.$item->title.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->name.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->content.'</td>
                                                        
                                <td class="text-truncate" style="max-width: 150px;"> '.'<a class="btn btn-primary btn-md" href="service-consultants/'.$item->id.'/edit/">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                    '.'<button type="button" class="btn btn-danger btn-md"
                                                            onclick="delete_about(this)" data-id="'.$item->id.'" id="about_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
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
             $about = ServiceConsultants::paginate(5);
        }
       
        return view('admin.service.consultants.index',compact('about'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.consultants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required',
            'name'       => 'required',
            'content'    => 'required',
        ]);  

        $about = ServiceConsultants::create([
            'title'         => $request -> title,
            'name'          => $request -> name,
            'content'       => $request -> content,
        ]);
        return redirect('admin/service-consultants')->with('success','Consultants has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = ServiceConsultants::find($id);
       
        return view('admin.service.consultants.edit',compact('about'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'         => 'required',
            'name'          => 'required',
            'content'       => 'required',
        ]);  

        $about = ServiceConsultants::find($id);

        $about -> title       = $request -> title;
        $about -> name        = $request -> name;
        $about -> content     = $request -> content;

        $about -> save();
        return redirect('admin/service-consultants')->with('success','Consultants has been Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         $consultants_id = $request->id;
        if($consultants_id != '')
        {
            $about = ServiceConsultants::find($consultants_id);
            
            
            $about -> delete();

            return redirect('admin/service-consultants')->with('success','Consultants has been deleted successfully.'); 
        }
    
    }
}
