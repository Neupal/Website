<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Website extends Controller
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
        $customer = new Customer();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $website->contact = $request['contact'];
        $customer->address = $request['address'];
        // $customer->password = $request['passpord'];
        $customer->save();

        return redirect('/custom/view');
    }
}
