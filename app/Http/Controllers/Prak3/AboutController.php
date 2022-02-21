<?php

namespace App\Http\Controllers\Prak3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('about.about');
    }
}
