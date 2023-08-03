<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    public function main()
    {
        return view('main');
    }
    
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'address'=>'required',
            'description'=>'required',
        ]);

        $website = new Contact();
        $website->name = $request->name;
        $website->email = $request->email;
        $website->contact = $request->contact;
        $website->address = $request->address;
        $website->description = $request->description;
        $website->save();

        return redirect('/contact');
    }
}
