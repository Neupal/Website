<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Description;

class DescriptionController extends Controller
{
    public function create()
    {

        // $data=[
        //     'title' => 'Who we are',
        //     'subtitle' => 'Venture Four Technology'
        // ];
        $title='Who we are';
        $subtitle="Venture four technology";
        $data=compact('title', 'subtitle');

        $detail= Description::create($data);
    }
}
