<?php

namespace App\Http\Controllers\sock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestmonialController extends Controller
{
    public function testmonial(){
        return view('sock.testmonial');
    }
}
