<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function contactList(Request $request)
    {
        if($request->contact_search){

        $contact = ContactUs::where('title','like','%'.$request->contact_search.'%')
                            ->orWhere('f_name','like','%'.$request->contact_search.'%')
                            ->orWhere('l_name','like','%'.$request->contact_search.'%')
                            ->orWhere('email','like','%'.$request->contact_search.'%')
                            ->orWhere('phone_number','like','%'.$request->contact_search.'%')
                            ->orWhere('address','like','%'.$request->contact_search.'%')
                            ->orWhere('zipcode','like','%'.$request->contact_search.'%')
                            ->orWhere('contact_help','like','%'.$request->contact_search.'%')
                            ->paginate(6);

                $output = '';
                $data = [];
                foreach($contact as $key=>$item)
                {  
                    $output .= '<tr '.'id='.$item->id.'>
                                <td> '.$contact->firstItem() + $key.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->properties_tab.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->title.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->f_name.'</td>  
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->l_name.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->email.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->phone_number.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->address.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->zipcode.'</td>
                                <td class="text-truncate" style="max-width: 150px;"> '.$item->contact_help.'</td>
                                <td> '.'<a class="btn btn-primary btn-md" href="view-contact-us/'.$item->id.'">'.'<i class="fas fa-eye"></i>'.' View </a>
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
            $contact = ContactUs::paginate(6);
        }
        
        return view('admin.contact-us.contact-us-list',compact('contact'));
    }

    public function viewContact($id)
    {
        $view_contact = ContactUs::find($id);
        return view('admin.contact-us.view-contact-us',compact('view_contact'));
    }
}
