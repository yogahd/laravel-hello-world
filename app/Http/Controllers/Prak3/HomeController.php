<?php

namespace App\Http\Controllers\Prak3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.home');
    }
}
