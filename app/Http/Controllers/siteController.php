<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
   
    public function about()
    {
        return view('about');
    }
}
