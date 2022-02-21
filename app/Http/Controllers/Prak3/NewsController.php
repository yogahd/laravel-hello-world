<?php

namespace App\Http\Controllers\Prak3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(){
        return view('news.news');
    }
}
