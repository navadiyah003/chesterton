<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon; 
use Illuminate\Support\Str;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.layouts.login');
    }
    public function userList(Request $request)
    {
        if($request->user_search){

            $users = User::where('name','like','%'.$request->user_search.'%')
                            ->orWhere('email','like','%'.$request->user_search.'%')
                            ->orWhere('mobile_no','like','%'.$request->user_search.'%')
                            ->orWhere('gender','like','%'.$request->user_search.'%')
                            ->orWhere('address','like','%'.$request->user_search.'%')
                            ->paginate(6);

            $output = '';
            $data = [];
            foreach($users as $key=>$item)
            {   
                $output .= '<tr '.'id='.$item->id.'>
                            <td> '.$users->firstItem() + $key.'</td>
                            <td> '.$item->name.'</td>
                            <td> '.$item->email.'</td>
                            <td> '.$item->mobile_no.'</td>
                            <td> '.$item->gender.'</td>
                            <td class="text-truncate" style="max-width: 150px;"> '.$item->address.'</td>
                            <td> '.'<img src="/admin/uploads/user/image/'.$item->image.'" width="70px" height="70px" alt="Image">'.'</td>
                           
                            <td> '.'<a class="btn btn-primary btn-md" href="edit-user/'.$item->id.'">'.'<i class="fas fa-edit"></i>'.' Edit </a>
                                                '.'<button type="button" class="btn btn-danger btn-md"
                                                        onclick="delete_user(this)" data-id="'.$item->id.'" id="user_delete"><i class="fas fa-trash-alt"></i>'.' Delete </button>
                                                               '.'</td>
                            </tr>';  

                $data[] = $item['name'];                      
            }
            return response()->json([
                'output' => $output, 
                'data' => $data,
            ]);
    } 
    else{
        $users = User :: paginate(6);
    }
    
    return view('admin.user.user-list',compact('users'));

    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('admin.layouts.register');
    }
      
    public function customRegistration(Request $request)
    { 
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
        return redirect()->route('admin.dashboard');
    }

    public function create()
    {
        return view('admin.user.create-user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:6',
            'mobile_no' => 'required|numeric|min:10',
            'gender'    => 'required',
            'address'   => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasfile('image'))
        {   
                    $file = $request -> file('image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    // dd($filename);
                    if($file->move('admin/uploads/user/image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
        
        $users = User::create([
            'name'          => $request -> name,
            'email'         => $request -> email,
            'password'      => Hash::make($request -> password),
            'mobile_no'     => $request -> mobile_no,
            'gender'        => $request -> gender,
            'address'       => $request -> address,
            'image'         => $filename,
        ]);
        return redirect('admin/user-list')->with('success','User has been added successfully');
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.user.edit-user',compact('users'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([

            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:6',
            'mobile_no' => 'required|numeric|min:10',
            'gender'    => 'required',
            'address'   => 'required',
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $users = User::find($id);
        if($request->hasfile('image'))
        {           
                    $destination='admin/uploads/user/image/'.$users->image;
                        if(File::exists($destination))
                        {
                                File::delete($destination);
                        }
                    $file = $request -> file('image');
                    $extension = $file -> getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    // dd($filename);
                    if($file->move('admin/uploads/user/image/',$filename))
                    {
                        $files[] = $filename;
                    }                    
        }
        else{
            $filename = $users->image;
        }
        $users -> name      = $request -> name;
        $users -> email     = $request -> email;
        //dd($request->password,$users->password);
        if($request->password == $users->password)
        {
            //dd("here");
            $users-> password = $request->password;
         }
         else{
           // dd("dbjhbcd");
             $users -> password  = Hash::make($request -> password);
         }
       
        $users -> mobile_no = $request -> mobile_no;
        $users -> gender    = $request -> gender;
        $users -> address   = $request -> address;
        $users -> image     = $filename;
        $users -> save();
        
        return redirect('admin/user-list')->with('success','User has been updated successfully');
    }

    public function destroy(Request $request,$id)
    {
        $user_id = $request->id;
        if($user_id != '')
        {
            $users = User::find($user_id);
            $destination='/admin/uploads/user/image/'.$users->image;
        
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $users -> delete();

           return redirect('admin/user-list')->with('success','User has been deleted successfully.'); 
        }
    }




    public function forgotPasswordView()
    {
        return view('admin.layouts.forgot-password');
    }

    public function forgotPasswordAction(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);
        
        $user = User::where('email', $request->email)->first();
        Mail::send('admin.layouts.email.forgetPassword', ['token' => $token , 'id' => $user->id], function($message) use($request){
                $message->to($request->email);
                $message->subject('Reset Password');
            });


        return back()->with('message', 'We have e-mailed your password reset link!');
    }
    public function resetPasswordView($id)
    {
        return view('admin.layouts.create-password' , compact('id'));
    }
    public function createPasswordAction(Request $request , $id )
    {
        if($request->password == $request->password_confirmation){
          $user = User::where('email', $request->email)
          ->update(['password' => Hash::make($request->password)]);

            return redirect()->route('admin.login');
        }else{
            return back()->withErrors([
                'email' => 'Password does not match.',
            ])->onlyInput('email');
        }
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
