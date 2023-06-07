<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Offices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        $contact_detail = Offices::first();
        return view('contact-us', compact('contact_detail'));
    }

    public function add_inquiry(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email',
            'mobile_code' => 'required|numeric|min:10',
            'address' => 'required',
            'zipcode' => 'required|numeric|min:6',
            'contact_help' => 'required',

        ]);

        $contact = ContactUs::create([
            'title' => $request->title,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'phone_number' => $request->mobile_code,
            'address' => $request->address,
            'zipcode' => $request->zipcode,
            'contact_help' => $request->contact_help,

        ]);

        // dd($contact);

        Mail::send('emails.contact-us-email', ['contact' => $contact], function ($message) use ($request) {
            $message->to('daxesh.dignizant@yopmail.com');
            $message->subject('Contact Information');
        });
        // return view('user.auth.otp', compact('email'));

        return redirect('/contact-us')->with('form-submit', "Form Submitted Successfully");

    }
}
