<?php

namespace App\Http\Controllers;

use App\Models\IntegratedService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            return Redirect('the-way-login');
        }
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember_me = $request->has('remember_me') ? true : false; 
        
        // $response = Http::post('https://eu11-dev.propertyraptor.com/hornet/client/login', [
        //     'username' => $request->email,
        //     'password' => $request->password,
        // ]);

        // $jsonData = $response->json();
        // if ($jsonData['result'] === true) {
        //     Session::put('user', $request->email);
        //     Session::put('token', $jsonData['data']['token']);
        //     return redirect('/the-way-login')->with('message');
        // } else {
        //     return back()->with('error','Your Username and Password are Wrong.');
        // }
        
        // dd($jsonData);
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            Session::put('user', $request->input('email'));
            return redirect('/the-way-login')->with('message');
        }else{
            return back()->with('error','Your Username and Password are Wrong.');
        }
    }

    public function dashboard()
    {
        $user = auth()->user();
        // dd($user);
        $services = IntegratedService::latest()->paginate(4);
        return view('auth.the-way-login', compact('user','services'));
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/login');
    }
    
    public function gallery()
    {
        $user = auth()->user();
        return view('auth.gallery', compact('user'));
    }
}
